<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Models\Product;
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


Route::get('/admin', [ProductController::class, 'index']);
Route::get('/tambah', [ProductController::class, 'tambah']);
Route::post('/simpan', [ProductController::class, 'simpan']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/update/{id}', [ProductController::class, 'update']);
Route::post('/destroy/{id}', [ProductController::class, 'destroy']);


Route::get('/', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);


Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);

Route::get('product', [ProductController::class, 'tampilkan']);

