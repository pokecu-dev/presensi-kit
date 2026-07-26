<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AbsenController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai',function () {
    return response()->json([
        'hai' => 'hai'
    ]);
});

Route::get('/data/siswa',[AbsenController::class,'GetDataSiswa']);
Route::get('/data/absen',[AbsenController::class,'GetDataAbsen'])->middleware('auth');


Route::post('/absen',[AbsenController::class,'Absen']);