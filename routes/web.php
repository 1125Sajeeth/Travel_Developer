<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\aboutController;


Route::get('/',[homeController::class,'index'])->name('home');
Route::get('contact',[contactController::class,'index'])->name('contact');
Route::get('about',[aboutController::class,'index'])->name('about');
