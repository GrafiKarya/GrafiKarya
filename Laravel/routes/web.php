<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KaryaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KaryaController::class,'landingpage'])->name('landingpage');

Route::get('/dashboard', function () {
    return view('dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('karya', KaryaController::class);
Route::get('/upload',[KaryaController::class,'create'])->name('upload');

// Route::get('/index', [KaryaController::class,'landingpageUser'])->name('landingpageUser');

require __DIR__.'/auth.php';