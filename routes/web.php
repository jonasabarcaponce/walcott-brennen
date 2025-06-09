<?php

use App\Http\Controllers\ConcertController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/concerts', [ConcertController::class, 'index'])->name('concerts.index')->middleware(['auth', 'verified']);
Route::get('/concerts/{concert}', [ConcertController::class, 'show'])->name('concerts.show')->middleware(['auth', 'verified']);
Route::get('/concerts/create', [ConcertController::class, 'create'])->name('concerts.create')->middleware(['auth', 'verified']);
Route::post('/concerts', [ConcertController::class, 'store'])->name('concerts.store')->middleware(['auth', 'verified']);;
Route::get('/concerts/{concert}/edit', [ConcertController::class, 'edit'])->name('concerts.edit')->middleware(['auth', 'verified']);
Route::put('/concerts/{concert}', [ConcertController::class, 'update'])->name('concerts.update')->middleware(['auth', 'verified']);
Route::delete('/concerts/{concert}', [ConcertController::class, 'destroy'])->name('concerts.destroy')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/language', function (Request $request) {
    $locale = $request->input('locale');
    if (array_key_exists($locale, config('app.available_locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('language');

require __DIR__.'/auth.php';
