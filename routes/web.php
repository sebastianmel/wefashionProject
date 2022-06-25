<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirstController;
// use App\Http\Controllers\CategoryController;
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

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/category', [AdminController::class, 'index1'])->name('categoryAdmin');
Route::get('/admin/create', [AdminController::class, 'create'])->name('product.create');
Route::get('/admin/create-category', [AdminController::class, 'create1'])->name('product.create.category');
Route::post('/admin/create', [AdminController::class, 'store'])->name('product.add');
Route::post('/admin/create-category', [AdminController::class, 'store1'])->name('category.add');
Route::get('/admin/{product}', [AdminController::class, 'edit'])->name('product.edit');
Route::put('/admin/{product}', [AdminController::class, 'update'])->name('product.update');
Route::delete('/admin/{product}', [AdminController::class, 'delete'])->name('product.del');
Route::delete('/admin/{category}', [AdminController::class, 'deleteCategory'])->name('category.del');







