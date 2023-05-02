<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



Route::get('/home', [DashboardController::class, 'home'])->middleware('guest');

// Login

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/admin/register', [RegisterController::class, 'admin'])->middleware('guest');
Route::get('/mitra/register', [RegisterController::class, 'mitra'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/mitra/register', [RegisterController::class, 'storemi']);
Route::post('/admin/register', [RegisterController::class, 'storeadmin']);

// Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('IsLogin');

// Shop

Route::get('/shop', [ShopController::class, 'index'])->middleware('IsLogin');
Route::get('/shop/{id}', [ShopController::class, 'shop'])->middleware('IsLogin');
Route::post('/detail/{id}', [ShopController::class, 'pesan'])->middleware('IsLogin');
Route::get('/sell', [ShopController::class, 'jual'])->middleware('IsLogin');
Route::post('/sell', [ShopController::class, 'form'])->middleware('IsLogin');


Route::get('/learn', [LearnController::class, 'index'])->middleware('IsLogin');
