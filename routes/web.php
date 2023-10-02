<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OurCyclesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//----------------Pages-----------------------------
Route::get('/', [IndexController::class, 'index']);
Route::get('/home', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/ourCycle', [OurCyclesController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// ----------Register Login-------------------------

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::get('logout', [SessionController::class, 'destroy'])->middleware('auth');


// --------------Add Comment----------------------------

Route::post('addcomment', [CommentController::class, 'store'])->name('addcomment');

//----------------Cart----------------------------

Route::get('addtocart/{id}', [CartController::class, 'store'])->name('addtocart');
Route::get('getcart', [CartController::class, 'getcart']);


