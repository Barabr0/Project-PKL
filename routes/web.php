<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('/');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/Jelajah', [App\Http\Controllers\ExploreController::class, 'index'])->name('Jelajah');
Route::view('/tiket', 'ticket.index')->name('tiket');
Route::get('/event/pay/{id}', [App\Http\Controllers\PayController::class, 'eventPay'])->name('event.pay');
Route::get('/screen/pay/{id}', [App\Http\Controllers\PayController::class, 'screenPay'])->name('screen.pay');
Route::get('/biodata/{type}/{id}', [App\Http\Controllers\PayController::class, 'biodata'])->name('biodata');
Route::get('/confirmation/{type}/{id}', [App\Http\Controllers\PayController::class, 'confirmation'])->name('confirmation');
Route::get('/checkout/{type}/{id}', [App\Http\Controllers\PayController::class, 'checkout'])->name('checkout');
Route::view('/profile/setting', 'profile.setting')->name('pengaturan');
Route::get('/content/image', [App\Http\Controllers\ContentsController::class, 'index'])->name('content.image');
Route::resource('contents', App\Http\Controllers\ContentsController::class)->except(['index', 'show']);
Route::get('/blog', fn() => view('blog'))->name('blog');
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/event/blog', [App\Http\Controllers\BlogController::class, 'eventBlog'])->name('event.blog');
Route::get('/info-blog', [App\Http\Controllers\BlogController::class, 'infoBlog'])->name('info-blog');
Route::get('/screen/blog', [App\Http\Controllers\BlogController::class, 'screenBlog'])->name('screen.blog');
Route::get('/bantuan', fn() => view('bantuan'))->name('bantuan');
Route::get('/event/detail/{id?}', [App\Http\Controllers\EventsController::class, 'show'])->name('event.detail');
Route::get('/buat-event', fn() => view('creator.create'))->name('buat-event');
use App\Http\Controllers\ScreenController;

Route::get('/screen/page', [ScreenController::class, 'index'])->name('screen.page');
Route::get('/switch-mode/{mode}', function ($mode) {

    if (!in_array($mode, ['buyer', 'creator'])) {
        abort(404);
    }

    session(['mode' => $mode]);

    return back();

})->name('switch.mode');
Route::prefix('creator')->name('creator.')->group(function () {
    Route::get('/{id}', [App\Http\Controllers\CreatorController::class, 'page'])->name('page')->middleware('auth');
    
    Route::get('/event', [App\Http\Controllers\CreatorController::class, 'event'])->name('event');

    Route::get('/access', function () {
        if(session('mode') != 'creator') abort(403);
        return view('creator.access');
    })->name('access');
});
Route::get('/profile/legal-information', function () {

    return view('profile.legal-information');

})->name('profile.legal-information');
Route::get('/profile/bank', function () {

    return view('profile.bank');

})->name('profile.bank');
Route::resource('event', App\Http\Controllers\EventsController::class)->only(['create', 'store', 'destroy'])->middleware('auth');


Route::get('/biaya', fn() => view('biaya'))->name('biaya');
require __DIR__.'/auth.php';
