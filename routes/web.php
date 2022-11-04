<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjetController;
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


/* FRONT ROUTES*/ 
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');

/* BACK ROUTES*/
Route::get('/admin', function () {
    return view('back.adminhome');
});

Route::get('admin/portfolio', function (){
    return view('Back.pages.adminportfolio');
})->name('backportfolio');

Route::get('/admin', [MainController::class, 'admin'])->name('admin');
Route::post('/store/article', [ArticleController::class, 'store'])->name('store.article');
Route::post('/store/projet', [ProjetController::class, 'store'])->name('store.projet');
Route::get('admin/blog', [MainController::class, 'backblog'])->name('backblog');