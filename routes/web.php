<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/Jelajah', function () {
    return view('explore.index');
})->name('Jelajah');
Route::view('/tiket', 'ticket.index')->name('tiket');
Route::view('/setting', 'setting.index')->name('pengaturan');
Route::view('/content-image', 'content-image.index')->name('content-image');
Route::view('/blog', 'blog.index')->name('blog');
Route::view('/event-blog', 'event-blog.index')->name('event-blog');
Route::view('/info-blog', 'info-blog.index')->name('info-blog');
Route::view('/screen-blog', 'screen-blog.index')->name('screen-blog');
Route::view('/bantuan', 'help.index')->name('bantuan');
Route::view('/event-image', 'event-image.index')->name('event-image');
Route::view('/screen-page', 'screen-page.index')->name('screen-page');
Route::view('/creator-page', 'creator-page.index')->name('creator-page');
Route::get('/switch-mode/{mode}', function ($mode) {

    if (!in_array($mode, ['buyer', 'creator'])) {
        abort(404);
    }

    session(['mode' => $mode]);

    return back();

})->name('switch.mode');
Route::get('/kreator', function () {

    if(session('mode') != 'creator'){
        abort(403); // atau redirect
    }

    return view('creator-event.index');

})->name('kreator');
Route::get('/kreator/kelola-akses', function () {

    if(session('mode') != 'creator'){
        abort(403); // atau redirect
    }

    return view('accces-creator.index');

})->name('kelola-akses');
Route::get('/profile/legal-information', function () {

    return view('profile.legal-information');

})->name('profile.legal-information');
Route::get('/profile/bank', function () {

    return view('profile.bank');

})->name('profile.bank');
Route::get('/event/create', function () {

    return view('event.create');

})->name('event.create');
Route::get('/creator-create', function () {

    return view('creator-create.index');

})->name('creator-create');
Route::get('/biaya', function () {

    return view('biaya.index');

})->name('biaya');
require __DIR__.'/auth.php';
