<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PayController extends Controller
{
    public function eventPay($id)
    {
        $item = events::findOrFail($id);
        $title = $item->nama_event;
        $gambar = $item->gambar ? (Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/' . $item->gambar)) : 'https://picsum.photos/1200/600?random=' . $id;
        $price = $item->harga;
        $type = 'event';
        $id_item = $id;

        return view('event.pay', compact('title', 'gambar', 'price', 'type', 'id_item'));
    }

    public function screenPay($id)
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
            'api_key' => env('TMDB_KEY'),
            'language' => 'id-ID'
        ]);

        if ($response->successful()) {
            $movie = $response->json();
            $title = $movie['title'];
            $gambar = !empty($movie['backdrop_path']) ? 'https://image.tmdb.org/t/p/original' . $movie['backdrop_path'] : 'https://image.tmdb.org/t/p/original' . $movie['poster_path'];
            $price = 50000; 
            $type = 'movie';
            $id_item = $id;

            return view('screen.pay', compact('title', 'gambar', 'price', 'type', 'id_item'));
        }

        abort(404, 'Film tidak ditemukan');
    }

    public function biodata($type, $id)
    {
        $title = '';
        $price = 0;

        if ($type === 'event') {
            $item = events::findOrFail($id);
            $title = $item->nama_event;
            $price = $item->harga;
        } elseif ($type === 'movie') {
            $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
                'api_key' => env('TMDB_KEY'),
                'language' => 'id-ID'
            ]);
            if ($response->successful()) {
                $movie = $response->json();
                $title = $movie['title'];
                $price = 50000;
            }
        }

        return view('biodata.index', compact('title', 'price', 'type', 'id'));
    }

    public function confirmation($type, $id)
    {
        $title = '';
        $price = 0;

        if ($type === 'event') {
            $item = events::findOrFail($id);
            $title = $item->nama_event;
            $price = $item->harga;
        } elseif ($type === 'movie') {
            $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
                'api_key' => env('TMDB_KEY'),
                'language' => 'id-ID'
            ]);
            if ($response->successful()) {
                $movie = $response->json();
                $title = $movie['title'];
                $price = 50000;
            }
        }

        return view('confirmation.index', compact('title', 'price', 'type', 'id'));
    }

    public function checkout($type, $id)
    {
        $title = '';
        $price = 0;

        if ($type === 'event') {
            $item = events::findOrFail($id);
            $title = $item->nama_event;
            $price = $item->harga;
        } elseif ($type === 'movie') {
            $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
                'api_key' => env('TMDB_KEY'),
                'language' => 'id-ID'
            ]);
            if ($response->successful()) {
                $movie = $response->json();
                $title = $movie['title'];
                $price = 50000;
            }
        }

        return view('checkout.index', compact('title', 'price', 'type', 'id'));
    }
}
