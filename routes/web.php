<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/product_detail/{product}', [ProductController::class, 'show'])->name('product.show');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/product_register_request', [ProductController::class, 'post'])->name('product.post');
    Route::post('/product_register_request', [ProductController::class, 'store'])->name('product.store');
    Route::get('/lp/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/lp/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/lp/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

});


require __DIR__.'/auth.php';
