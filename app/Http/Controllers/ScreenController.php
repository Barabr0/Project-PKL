<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScreenController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;

        if (!$id) {
            abort(404);
        }

        $detailResponse = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
    'api_key' => env('TMDB_KEY'),
    'language' => 'id-ID'
]);

$data = $detailResponse->json();
if (!$detailResponse->successful() || !isset($data['title'])) {
    $detail = [
        'title' => 'Film tidak ditemukan',
        'overview' => 'Data tidak tersedia',
        'vote_average' => 0,
        'vote_count' => 0,
        'genres' => [],
        'runtime' => 0,
        'release_date' => now(),
        'poster_path' => null,
        'backdrop_path' => null,
        'id' => $id
    ];
} else {
    $detail = $data;
}

        $creditsResponse = Http::get("https://api.themoviedb.org/3/movie/{$id}/credits", [
            'api_key' => env('TMDB_KEY')
        ]);

        $credits = $creditsResponse->json();
        $cast = collect($credits['cast'] ?? [])->take(6);

        return view('screen.page', compact('detail', 'cast'));
    }
}