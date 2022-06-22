<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('first');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('product.create');
Route::get('/categoryAdmin', [App\Http\Controllers\HomeController::class, 'index1'])->name('categoryAdmin');
Route::post('/home/create', [App\Http\Controllers\HomeController::class, 'store'])->name('product.add');
