<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets', function () {
    return view('tickets');
});

Route::middleware('auth')->group(function () {

    Route::get('/events', [EventoController::class, 'index'])->name('eventos.index');
    Route::get('/events/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/events', [EventoController::class, 'store'])->name('eventos.store');

    // Route::get('/events', function () {
    //     return view('dashboard');
    // })->name('dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/language', [ProfileController::class, 'updateLanguage'])->name('profile.language.update');
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
