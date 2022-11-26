<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [BookController::class, 'index'])
    ->name('Home');

Route::get('/book-detail/{id}' , [BookController::class , 'show'])
    ->name('Book Detail');

Route::get('/publisher' , [PublisherController::class , 'index'])
    ->name('Publisher');

Route::get('/publisher-detail/{id}' , [PublisherController::class , 'show'])
    ->name('Publisher Detail');

Route::get('/bookCategory/{id}', [CategoryController::class, 'show'])
    ->name('Book Category');

Route::get('/contact', function(){
    return view('contact');
});
