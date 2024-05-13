<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return csrf_token();
});

Route::get('/get', [CRUDController::class, 'get'])->name('crud.get');
Route::post('/create', [CRUDController::class, 'create'])->name('crud.create');

Route::prefix('/mahasiswa')->controller(MahasiswaController::class)->group(function(){
    Route::get('/', 'index');
    Route::post('/', 'create');
});