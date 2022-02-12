<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::view('/', [ImageController::class, 'index'])->name('index');
Route::view('/detail', 'detail')->name('detail');
route::post('/create', [ImageController::class, 'create'])->name('create');
