<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublisherController;
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

//book
Route::get('/', [BookController::class, 'index']);
Route::get('/bookdetail/{id}', [BookController::class, 'show']);

//publisher
Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/publisherdetail/{id}', [PublisherController::class, 'show']);

//contact
Route::get('/contact', [Controller::class, 'contact']);

//category
Route::get('/category/{id}', [CategoryController::class, 'show']);
