<?php

namespace App\Http\Controllers;

use App\Models\contents;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ContentsController extends Controller
{
    public function index()
    {
        $contents = contents::all();
        return view('content.image', compact('contents'));
    }

    public function show($id)
    {
        $content = contents::findOrFail($id);
        return view('content.image', compact('content'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar')->store('contents', 'public');

        contents::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => '-',
            'gambar' => $path,
            'kategori_id' => 1,
            'url' => '#'
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        $content = contents::findOrFail($id);

        if ($request->hasFile('gambar')) {

            if ($content->gambar && Storage::disk('public')->exists($content->gambar)) {
                Storage::disk('public')->delete($content->gambar);
            }

            $path = $request->file('gambar')->store('contents', 'public');
            $content->gambar = $path;
        }

        $content->judul = $request->judul;
        $content->save();

        return back();
    }

    public function destroy($id)
    {
        $content = contents::findOrFail($id);

        if ($content->gambar && Storage::disk('public')->exists($content->gambar)) {
            Storage::disk('public')->delete($content->gambar);
        }

        $content->delete();

        return back();
    }
}