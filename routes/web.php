<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('beranda');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('beranda', function () {
    return view('beranda');
});
Route::get('fasilitas', function () {
    return view('fasilitas');
});
Route::get('jurusan', function () {
    return view('jurusan');
});
Route::get('eskul', function () {
    return view('eskul');
});
Route::get('industri', function () {
     return view('industri');
     $jurusan = Jurusan::all();
 });
Route::get('artikel', function () {
    return view('artikel');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth']],function(){
    Route::resource('home', HomeController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('eskul', EskulController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('industri', IndustriController::class);
    Route::resource('artikel', ArtikelController::class);
});

