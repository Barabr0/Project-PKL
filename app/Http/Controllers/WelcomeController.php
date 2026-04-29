<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use App\Models\contents;
use App\Models\categories;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    public function index()
    {
        $contents = contents::latest()->take(10)->get();
        $categories = categories::take(12)->get();
        $movies = cache()->remember('tmdb_now_playing', 7200, function () {
            $response = Http::timeout(5)->get('https://api.themoviedb.org/3/movie/now_playing', [
                'api_key' => env('TMDB_KEY'),
                'language' => 'id-ID',
                'page' => 1
            ]);

            return $response->successful()
                ? ($response->json()['results'] ?? [])
                : [];
        });

        // 🟢 SEPARATE QUERIES FOR EACH SECTION
        $popularEvents = events::with('category')->where('is_popular', true)->take(10)->get();
        $healingEvents = events::with('category')->whereHas('category', fn($q) => $q->where('nama_kategori', 'Healing'))->take(10)->get();
        $workshopEvents = events::with('category')->whereHas('category', fn($q) => $q->where('nama_kategori', 'Workshop'))->take(10)->get();
        $topEvents = events::with('category')->latest()->take(3)->get(); // For Event Top section
        
        // All events for Alpine filtering in "Populer di" section - limited to prevent memory leak
        $allEvents = events::with('category')->latest()->take(50)->get();
        $creators = \App\Models\User::where('role', 'like', '%creator%')->take(12)->get();

        $eventsJson = $allEvents->map(function ($e) {
            return [
                'id' => $e->id,
                'nama' => $e->nama_event, // This will use the fixed accessor
                'lokasi' => $e->lokasi ?? '',
                'kategori' => $e->category ? $e->category->nama_kategori : 'Umum',
                'harga' => $e->harga ?? 0,
                'url' => route('event.detail', $e->id),
            ];
        });

        return view('welcome', compact(
            'contents',
            'categories',
            'movies',
            'creators',
            'popularEvents',
            'healingEvents',
            'workshopEvents',
            'topEvents',
            'eventsJson'
        ));
    }
}
