<?php

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
    return view('home');
});

Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create', [\App\Http\Controllers\CategoryController::class, 'create']);
Route::post('categories', [\App\Http\Controllers\CategoryController::class, 'store']);


