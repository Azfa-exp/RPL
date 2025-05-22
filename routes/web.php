<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

   
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

   
    Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

    
    Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');

    
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});

require __DIR__.'/auth.php';