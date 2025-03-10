<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);
Route::patch('/articles/{article}', [ArticleController::class, 'update']);
Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);


