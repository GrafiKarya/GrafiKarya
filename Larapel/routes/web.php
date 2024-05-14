<?php

use App\Http\Controllers\GrafikKarya;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('daftarKarya');
});

Route::get('/', [GrafikKarya::class, 'index']);