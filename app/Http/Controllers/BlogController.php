<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\contents;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $contents = contents::latest()->take(10)->get();
        $main = $contents->first();
        return view('blog.index', compact('contents', 'main'));
    }

    public function eventBlog()
    {
        // We fetch events but pass them as 'contents' to reuse the same blade logic
        $contents = events::latest()->take(15)->get();
        $main = $contents->first();
        return view('blog.event', compact('contents', 'main'));
    }

    public function infoBlog()
    {
        $contents = contents::latest()->take(15)->get();
        $main = $contents->first();
        return view('blog.info', compact('contents', 'main'));
    }

    public function screenBlog()
    {
        // For screen blog, we might use a specific category or just contents for now
        $contents = contents::where('judul', 'like', '%screen%')->orWhere('deskripsi', 'like', '%screen%')->latest()->take(15)->get();
        if($contents->isEmpty()) $contents = contents::latest()->take(15)->get();
        
        $main = $contents->first();
        return view('blog.screen', compact('contents', 'main'));
    }

    public function show($id)
    {
        $content = contents::findOrFail($id);
        return view('blog.show', compact('content'));
    }
}
