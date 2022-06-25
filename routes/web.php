<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('first');
// });
Route::get('/', [FirstController::class, 'firstP']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('product.create');
Route::get('/categoryAdmin', [HomeController::class, 'index1'])->name('categoryAdmin');
Route::post('/home/create', [HomeController::class, 'store'])->name('product.add');
Route::get('/home/{product}', [HomeController::class, 'edit'])->name('product.edit');
Route::delete('/home/{product}', [HomeController::class, 'delete'])->name('product.del');
Route::put('/home/{product}', [HomeController::class, 'update'])->name('product.update');
