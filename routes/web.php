<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.template');
});


Route::resource('kategori', KategoriController::class); //resource hanya berpengaruh dgn url saja 
Route::resource('merk', MerkController::class);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang-tambah', [BarangController::class, 'create']);
Route::post('/barang-tambah', [BarangController::class, 'store']);
Route::get('/barang-edit/{barang}', [BarangController::class, 'edit']);
Route::patch('/barang-edit/{barang}', [BarangController::class, 'update']);
Route::delete('/barang-hapus/{barang}', [BarangController::class, 'destroy']);

// /{mewakilkan id, nama bebas}




