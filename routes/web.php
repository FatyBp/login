<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Usuarios;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/loguear',[AuthController::class,'logear'])->name('logear');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/dash',[Usuarios::class,'index'])->name('dash');
