<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RenterRequestController;


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


// 商品一覧画面（メインのインデックスページ）表示
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/ring', [ProductController::class, 'ring'])->name('ring');


// 貸し手用のLP一旦 Controller を経由せずに書いている。
Route::get('/lender', function () {
    return view('/lender/lender');
})->name('lender.index');

// 商品詳細ページ表示
Route::get('/product_detail/{product}', [ProductController::class, 'show'])->name('product.show');

// ログイン済みの人のみアクセス可能
Route::group(['middleware' => ['auth']], function() {
    // 商品登録リクエストページ表示
    Route::get('/product_register_request', [ProductController::class, 'post'])->name('product.post');
    // 商品登録リクエスト処理
    Route::post('/product_register_request', [ProductController::class, 'store'])->name('product.store');

    // マイページ表示
    Route::get('/mypage', [ProductController::class, 'mine'])->name('mypage');

    // 商品を借りれるようになるための審査申請フォームページ表示
    Route::get('/renter_request', [RenterRequestController::class, 'index'])->name('renter_request');
    // 商品を借りれるようになるための審査申請フォームページ処理
    Route::post('/renter_request', [RenterRequestController::class, 'store'])->name('renter_request.store');
    // 上記のフォームページの間違いがないかの確認画面
    Route::get('/renter_request_confirm', [RenterRequestController::class, 'confirm'])->name('renter_request.confirm');


    // 以下はテスト用
    // Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    // Route::put('/{product}', [ProductController::class, 'update'])->name('product.update');
    // Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

});


require __DIR__.'/auth.php';
