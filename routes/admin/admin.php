<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::prefix('admin')->group(function(){
    Route::get('/adl/login',[AuthController::class,'index'])->name('login.page');
    Route::post('/login/owner',[AuthController::class,'login'])->name('admin.login');
    Route::get('/dashboard',[AuthController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AuthController::class,'Adminlogout'])->name('admin.logout')->middleware('admin');
});