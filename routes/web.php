<?php

use App\Http\Controllers\ConcertsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

Route::controller(ConcertsController::class)->group(function() {
    Route::get('/','index')->name('clientes');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


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
