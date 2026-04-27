<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use App\Models\categories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function show()
    {
        // Get generic first event to show in simple detail, just for dynamic preview.
        $event = events::first(); 
        return view('event.detail', compact('event'));
    }

    public function detail($id)
    {
        $event = events::findOrFail($id);
        return view('event.detail', compact('event'));
    }

    public function create()
    {
        $categories = categories::all();
        return view('event.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'kategori_id' => 'required|exists:categories,id',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ],[
            'nama_event.required' => 'Nama event wajib diisi.',
            'kategori_id.required' => 'Kategori wajib diisi.',
            'tanggal.required' => 'Tanggal wajib diisi.',
            'lokasi.required' => 'Lokasi wajib diisi.',
            'harga.required' => 'Harga wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
            'gambar.required' => 'Gambar wajib diisi.',
            'gambar.image' => 'Gambar harus berupa file gambar.',
            'gambar.mimes' => 'Gambar harus berupa file gambar dengan format jpeg, png, jpg, atau webp.',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB.',
        ]
    );

        // Simpan gambar ke subfolder events di storage public
        $gambarPath = $request->file('gambar')->store('events', 'public');
        
        $urlGambar = url('storage/' . $gambarPath);

        events::create([
            'nama_event' => $request->nama_event,
            'slug' => Str::slug($request->nama_event . '-' . time()),
            'kategori_id' => $request->kategori_id,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $urlGambar,
        ]);

        return redirect()->route('Jelajah')->with('success', 'Event berhasil dibuat!');
    }

    public function destroy(events $event)
    {
        // Ekstrak relative path dari URL
        // Contoh: http://127.0.0.1:8000/storage/events/file.jpg -> events/file.jpg
        $path = str_replace(url('storage') . '/', '', $event->gambar);
        
        // Hapus file gambar dari local storage bila exists
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }

        $event->delete();

        return redirect()->back()->with('success', 'Event berhasil dihapus!');
    }
}
