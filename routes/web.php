<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\DotaController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\GameController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/videos', [VideosController::class, 'index'])->name('videos.index');
    Route::get('/videos/create', [VideosController::class, 'create'])->name('videos.create');
    Route::post('/videos', [VideosController::class, 'store'])->name('videos.store');
    Route::get('/videos/{id}', [VideosController::class, 'show'])->name('videos.show');
    Route::get('/videos/{id}/edit', [VideosController::class, 'edit'])->name('videos.edit');
    Route::put('/videos/{id}', [VideosController::class, 'update'])->name('videos.update');
    Route::delete('/videos/{id}', [VideosController::class, 'destroy'])->name('videos.destroy');

    Route::get('/dota', [DotaController::class, 'index'])->name('dota.index');
    Route::get('/dota/create', [DotaController::class, 'create'])->name('dota.create');
    Route::post('/dota', [DotaController::class, 'store'])->name('dota.store');
    Route::get('/dota/{id}', [DotaController::class, 'show'])->name('dota.show');
    Route::get('/dota/{id}/edit', [DotaController::class, 'edit'])->name('dota.edit');
    Route::put('/dota/{id}', [DotaController::class, 'update'])->name('dota.update');
    Route::delete('/dota/{id}', [DotaController::class, 'destroy'])->name('dota.destroy');

    Route::get('/game', [GameController::class, 'index'])->name('game.index');
    Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
    Route::post('/game', [GameController::class, 'store'])->name('game.store');
    Route::get('/game/{id}', [GameController::class, 'show'])->name('game.show');
    Route::get('/game/{id}/edit', [GameController::class, 'edit'])->name('game.edit');
    Route::put('/game/{id}', [GameController::class, 'update'])->name('game.update');
    Route::delete('/game/{id}', [GameController::class, 'destroy'])->name('game.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [WebController::class, 'index']);

require __DIR__.'/auth.php';
