<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SellerController;

Route::prefix('seller')->group(function(){
    Route::get('/sel/login',[SellerController::class,'sellerindex'])->name('seller.login.page');
    Route::post('/login/owner',[SellerController::class,'sellerlogin'])->name('seller.login');
    Route::get('/dashboard',[SellerController::class,'sellerdashboard'])->name('seller.dashboard')->middleware('seller');
    Route::get('/logout',[SellerController::class,'sellerlogout'])->name('seller.logout');
});