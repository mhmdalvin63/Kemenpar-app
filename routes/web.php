<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {return view('welcome');});

Route::get('/tambahNarasumber', function () {return view('Narasumber.listNarasumber');});
Route::get('/desaWisata', function () {return view('desaWisata.desaWisata');});
Route::get('/hotel', function () {return view('hotel.hotel');});
Route::get('/proposalDesa', function () {return view('proposalDesa.proposalDesa');});
Route::get('/laporanBulanan', function () {return view('laporanBulanan.laporanBulanan');});


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/sosialisasi', function() { return view('sosialisasi.index'); })->name('sosialisasi');
    Route::get('/pelatihan-a', function() { return view('pelatihan-a.index'); })->name('pelatihan-a');
    Route::get('/pelatihan-b', function() { return view('pelatihan-b.index'); })->name('pelatihan-b');
    Route::get('/pelatihan-c', function() { return view('pelatihan-c.index'); })->name('pelatihan-c');
    Route::get('/pendampingan', function() { return view('pendampingan.index'); })->name('pendampingan');
    Route::get('/apresiasi', function() { return view('apresiasi.index'); })->name('apresiasi');
});

