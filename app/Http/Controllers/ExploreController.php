<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use App\Models\categories;

class ExploreController extends Controller
{
    public function index(Request $request)
    {
        $categories = categories::all();
        $query = events::with('category');

        if ($request->has('search') && $request->search != '') {
            $query->where('nama_event', 'like', '%' . $request->search . '%');
        }

        if ($request->has('kategori') && $request->kategori != '') {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->kategori)->orWhere('nama_kategori', $request->kategori);
            });
        }

        if ($request->has('kota') && $request->kota != '') {
            $query->where('lokasi', 'like', '%' . $request->kota . '%');
        }

        $events = $query->get();

        return view('explore.index', compact('events', 'categories'));
    }
}
