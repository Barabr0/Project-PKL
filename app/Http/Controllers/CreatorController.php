<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\User;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function page($id)
    {
        // 1. Find the user or fail
        $creator = User::findOrFail($id);

        // 2. Check if the user is a creator
        if (!str_contains(strtolower($creator->role), 'creator')) {
            return redirect()->back()->with('error', 'Akun ini bukan kreator');
        }

        // 3. Get creator's events with status filter
        $status = request('status', 'aktif');
        $events = $creator->events()->where('status', $status)->get();

        return view('creator.page', compact('creator', 'events', 'status'));
    }

    public function event()
    {
        if(session('mode') != 'creator') abort(403);
        $events = events::all();
        return view('creator.event', compact('events'));
    }
}
