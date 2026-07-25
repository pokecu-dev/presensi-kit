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

Route::get('/data',[AbsenController::class,'GetData']);

Route::get('/absen',[AbsenController::class,'Absen']);