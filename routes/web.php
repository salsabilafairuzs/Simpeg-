<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\Dashboard\dashboardController;


Route::middleware('auth')->group(function () {
    Route::resource('departemen', DepartemenController::class);
    Route::get('departemen/{id}/delete', [DepartemenController::class, 'destroy']);
    
    Route::resource('jabatan', JabatanController::class);
    Route::get('jabatan/{id}/delete', [JabatanController::class, 'destroy']);
    
    Route::resource('pegawai', PegawaiController::class);
    Route::get('pegawai/{id}/delete', [PegawaiController::class, 'destroy']);
    
    Route::get('dashboard',[dashboardController::class,'index']);
    Route::get('/',[dashboardController::class,'index']);
});



require __DIR__.'/auth.php';
