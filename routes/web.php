<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



Route::get('/home', [DashboardController::class, 'home'])->middleware('guest');
Route::get('/', [DashboardController::class, 'a'])->middleware('guest');

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
Route::get('/akun', [DashboardController::class, 'akun'])->middleware('IsLogin');

// Shop

Route::get('/shop', [ShopController::class, 'index'])->name('shop')->middleware('IsLogin');
Route::get('/shop/{id}', [ShopController::class, 'shop'])->middleware('IsLogin');
Route::post('/detail/{id}', [ShopController::class, 'pesan'])->middleware('IsLogin');
Route::post('/checkout', [ShopController::class, 'checkout'])->middleware('IsLogin');
Route::get('/edit/{id}', [ShopController::class, 'edit'])->middleware('IsLogin');
Route::post('/update/{id}', [ShopController::class, 'update'])->middleware('IsLogin');
Route::get('/delete/{id}', [ShopController::class, 'delete'])->middleware('IsLogin');

// Sell
Route::get('/sell', [ShopController::class, 'jual'])->middleware('IsMitra');
Route::post('/sell', [ShopController::class, 'form']);

// Payment
Route::get('/order', [OrderController::class, 'index'])->middleware('IsMitra');
Route::get('/ubah/{id}', [OrderController::class, 'ubah'])->middleware('IsMitra');
Route::post('/ubah1/{id}', [OrderController::class, 'ubah1'])->middleware('IsMitra');
Route::get('/order/{id}', [OrderController::class, 'order'])->name('order')->middleware('IsMitra');
Route::get('/tolak/{id}', [OrderController::class, 'tolak'])->middleware('IsMitra');

//learn
Route::get('/learn', [LearnController::class, 'index'])->name('learn')->middleware('IsLogin');
Route::get('/article', [LearnController::class, 'create'])->middleware('IsLogin');
Route::post('/artikel', [LearnController::class, 'artikel'])->middleware('IsLogin');
Route::get('/artikel/{id}', [LearnController::class, 'isi'])->middleware('IsLogin');
Route::get('/editlearn/{id}', [LearnController::class, 'editlearn'])->middleware('IsLogin');
Route::post('/updatelearn/{id}', [LearnController::class, 'update'])->middleware('IsLogin');
Route::get('/deletelearn/{id}', [LearnController::class, 'delete'])->middleware('IsLogin');
// Route::get('/lihat/{id}', [LearnController::class, 'isi'])->middleware('IsLogin');

//income
Route::get('/income', [IncomeController::class, 'index'])->name('income')->middleware('IsLogin');

// History
Route::get('/history', [HistoryController::class, 'index'])->name('income')->middleware('IsLogin');