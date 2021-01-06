<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\Backend\PostController;

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

Route::get('/', [PageController::class, 'posts'])->name('posts');
Route::get('blog/{post:slug}', [PageController::class, 'post'])->name('post');

Auth::routes(['register' => false, 'request' => false, 'reset' => false]);

Route::resource('posts', PostController::class)
    ->middleware('auth')
    ->except('show');

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
