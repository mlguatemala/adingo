<?php

use Illuminate\Support\Facades\Route;

Route::post('loginpost', [App\Http\Controllers\Admin\LoginController::class,'indexPost'])->name('login.post');
Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('login.logout');
Route::resource('login', App\Http\Controllers\Admin\LoginController::class);
Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin');
    Route::get('sala', [App\Http\Controllers\Admin\HomeController::class, 'sala'])->name('sala');
    Route::get('bingo-online', [App\Http\Controllers\Admin\HomeController::class, 'bingo'])->name('bingo');
    Route::get('ganador', [App\Http\Controllers\Admin\HomeController::class,'ganador'])->name('ganador');
    Route::resource('bingo', App\Http\Controllers\Admin\BingoController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('bingo_logs', App\Http\Controllers\Admin\BingoLogController::class)->only(['store']);
    Route::resource('bingo_users', App\Http\Controllers\Admin\BingoUserController::class)->only(['store']);
});
