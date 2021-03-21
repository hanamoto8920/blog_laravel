<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('top/top');
});
// Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ブログ
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog_index');
Route::get('/blog/create', [BlogController::class, 'create'])->middleware('auth')->name('blog_create');
Route::post('/blog/create', [BlogController::class, 'store']);
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog_show');

// ユーザー
Route::get('user/index', [UserController::class, 'index'])->name('user_index');
Route::get('user/{id}', [UserController::class, 'show'])->name('user_show');