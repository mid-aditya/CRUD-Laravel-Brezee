<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VideoController::class, 'index'],function () {
    return view('video');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

    // Route::get('/dashboard', [VideoController::class, 'tambah']);
    // Route::get('/dashboard', [VideoController::class, 'hapus']);
    // Route::get('/dashboard', [VideoController::class, 'edit']);

require __DIR__.'/auth.php';
