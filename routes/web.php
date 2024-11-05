<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.template');
});


Route::resource('jabatan', JabatanController::class);
Route::get('jabatan/{id}/delete', [JabatanController::class, 'destroy']);





