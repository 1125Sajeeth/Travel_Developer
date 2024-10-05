<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\travelpackage;
use App\Http\Controllers\admincontroller;


Route::get('/',[homeController::class,'index'])->name('home');
Route::get('contact',[contactController::class,'index'])->name('contact');
Route::get('about',[aboutController::class,'index'])->name('about');
Route::get('travel_package',[travelpackage::class,'index'])->name('travelpackage');
Route::get('admin',[admincontroller::class,'index'])->name('admin');
