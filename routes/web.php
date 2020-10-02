<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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
    return view('pages.welcome');
});


Auth::Routes();

Route::get('/index',[PagesController::class, 'index']);
Route::get('/index/{id}',[PagesController::class, 'category']);
Route::get('/view/{id}',[PagesController::class, 'category2']);


Route::get('/create',[PagesController::class, 'create']);
Route::get('/view',[PagesController::class, 'view']);
Route::get('/about',[PagesController::class, 'about']);

// Route::post('/posts',[PostsController::class,'store'])->name('posts.store');
Route::resource('posts',PostsController::class);