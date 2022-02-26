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

Route::get('/', [ImageController::class, 'index'])->name('index');
Route::get('/detail/{id}', [ImageController::class, 'detail'])->name('detail');
route::post('/create', [ImageController::class, 'create'])->name('create');
route::post('/delete/{image:id}', [ImageController::class, 'delete'])->name('delete');
route::get('/download/{id}', [ImageController::class, 'download'])->name('download');
