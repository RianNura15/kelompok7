<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return  'Kelompok7';
});

Route::get('/home', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/category', [PageController::class, 'category']);
Route::get('/cms', [PageController::class, 'cms']);
Route::get('/comingsoon', [PageController::class, 'comingsoon']);
Route::get('/howitwork', [PageController::class, 'howitwork']);
Route::get('/pricing', [PageController::class, 'pricing']);
Route::get('/product', [PageController::class, 'product']);
Route::get('/product', [PageController::class, 'product']);
