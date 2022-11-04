<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
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

Route::get('/admin', function () {
    return view('back.admin');
});
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/store.article', [ArticleController::class, 'store'])->name('store.article');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');