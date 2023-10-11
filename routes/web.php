<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::controller(App\Http\Controllers\AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('pasien', 'pasien')->name('pasien');
    Route::get('konsultasi', 'konsultasi')->name('konsultasi');
    Route::get('dokter', 'dokter')->name('dokter');
    Route::get('spesialisasi', 'spesialisasi')->name('spesialisasi');
    Route::get('logactivity', 'logactivity')->name('logactivity');
});





