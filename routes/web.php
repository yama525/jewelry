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

// Routeを置き換え 開始
Route::get('/', function () {
    return view('top');
});


Route::group(['middleware' => ['auth']], function() {
    // よくわからないけど、ログイン後も LP のページが表示される。
    Route::get('/lp', [ProductController::class, 'index'])->name('product.index');
    Route::post('/lp', [ProductController::class, 'store'])->name('product.store');
    Route::get('/lp/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/lp/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/lp/{product}', [ProductController::class, 'destroy'])->name('product.destroy');



    // とりあえず mypage 表示させたい場合はこっち。
    // Route::get('/', function () {
    //     return view('mypage');
    // });
    
});


require __DIR__.'/auth.php';
