<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/product/category/men', [FirstController::class, 'menCategory'])->name('product.categoryMen');
Route::get('/product/category/women', [FirstController::class, 'womenCategory'])->name('product.categoryWomen');
Route::get('/product/onsale', [FirstController::class, 'saleCategory']);

Route::delete('/admin/category/{category}', [AdminController::class, 'deleteCategory'])->name('category.del');
Route::delete('/admin/product/{product}', [AdminController::class, 'delete'])->name('product.del');

Route::get('/product/{product}', [FirstController::class, 'productDetail'])->name('product.detail');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/category', [AdminController::class, 'index1'])->name('categoryAdmin');

Route::get('/admin/create', [AdminController::class, 'create'])->name('product.create');
Route::get('/admin/create-category', [AdminController::class, 'create1'])->name('product.create.category');

Route::post('/admin/create', [AdminController::class, 'store'])->name('product.add');
Route::post('/admin/create-category', [AdminController::class, 'store1'])->name('category.add');


Route::get('/admin/edite/{product}', [AdminController::class, 'edit'])->name('product.edit');
Route::put('/admin/update{product}', [AdminController::class, 'update'])->name('product.update');

Route::get('/admin/edite/category/{category}', [AdminController::class, 'edit1'])->name('category.edit');
Route::put('/admin/update/category{category}', [AdminController::class, 'update1'])->name('category.update');
