<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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

Route::get('/admin', [MainController::class, 'admin'])->name('admin');
Route::post('/store/article', [ArticleController::class, 'store'])->name('store.article');
Route::post('/store/projet', [ProjetController::class, 'store'])->name('store.projet');
Route::post('/store/message', [ContactController::class, 'store'])->name('store.contact');
Route::get('admin/blog', [MainController::class, 'backblog'])->name('backblog');
Route::get('admin/blog/create', [MainController::class, 'blogcreate'])->name('blogcreate');
Route::get('admin/projet/create', [MainController::class, 'backprojet'])->name('projetcreate');
Route::get('admin/projet', [MainController::class, 'projet'])->name('projet');
Route::get('admin/messages', [MainController::class, 'message'])->name('message');

/*DELETE ADMIN*/
Route::get('admin/delete/{item}', [ArticleController::class, 'delete']);
Route::get('admin/delete/{item}', [ProjetController::class, 'delete']);

/* Method Show*/
Route::get('admin/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('admin/projet/{id}', [ProjetController::class, 'show'])->name('projet.show');

/* Update */
Route::get('edit/{id}', [ArticleController::class, 'edit']);
Route::post('update/{id}', [ArticleController::class, 'update']);

Route::get('edit/{id}', [ProjetController::class, 'edit']);
Route::post('update/{id}', [ProjetController::class, 'update']);