<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RenterRequestController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotifController;
use App\Http\Controllers\ProductRequestController;





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
Route::get('/all-jewelries', [ProductController::class, 'all'])->name('all');
Route::get('/search_product', [ProductController::class, 'search_product'])->name('search_product');

// 商品のカテゴリ別ページ
Route::prefix('/category')->group(function() {
    Route::get('/ring', [ProductController::class, 'ring'])->name('ring');
    Route::get('/necklace', [ProductController::class, 'necklace'])->name('necklace');
    Route::get('/bracelet', [ProductController::class, 'bracelet'])->name('bracelet');
    Route::get('/earing', [ProductController::class, 'earing'])->name('earing');
    Route::get('/other', [ProductController::class, 'other'])->name('other');
});

Route::prefix('/plan')->group(function() {
    Route::get('/standard', [ProductController::class, 'standard'])->name('standard');
    Route::get('/premium', [ProductController::class, 'premium'])->name('premium');
    Route::get('/luxury', [ProductController::class, 'luxury'])->name('luxury');
});


// 貸し手用のLP一旦 Controller を経由せずに書いている。
Route::get('/lender', function () {
    return view('/lender/lender');
})->name('lender.index');

// 商品詳細ページ表示
Route::get('/product_detail/{product}', [ProductController::class, 'show'])->name('product.show');

// ログイン済みの人のみアクセス可能
Route::group(['middleware' => ['auth']], function() {
    // 商品登録リクエストページ表示
    Route::get('/product_register_request', [ProductRequestController::class, 'post'])->name('product_request.post');
    // 商品登録リクエスト処理
    Route::post('/product_register_request', [ProductRequestController::class, 'store'])->name('product_request.store');

    // マイページ表示
    // Route::get('/mypage', [ProductController::class, 'mine'])->name('mypage');

    // 商品を借りれるようになるための審査申請フォームページ表示
    Route::get('/renter_request', [RenterRequestController::class, 'index'])->name('renter_request');
    // 商品を借りれるようになるための審査申請フォームページ処理
    Route::post('/renter_request', [RenterRequestController::class, 'store'])->name('renter_request.store');
    // 上記のフォームページの間違いがないかの確認画面
    Route::get('/renter_request_confirm', [RenterRequestController::class, 'confirm'])->name('renter_request.confirm');

    // 決済処理
    Route::get('checkout/{product}', [ProductController::class, 'checkout'])->name('checkout');
    Route::get('cancel/{product}', [ProductController::class, 'cancel'])->name('cancel');

    // いいね機能
    Route::post('/product_detail/{product}', [ProductController::class, 'like'])->name('product.like');

    // 以下はテスト用
    // Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    // Route::put('/{product}', [ProductController::class, 'update'])->name('product.update');
    // Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

});

// マイページ
Route::prefix('mypage')->middleware('auth')->group(function() {
    Route::get('/', [ProductController::class, 'mypage'])->name('mypage');
    Route::get('/rental', [ProductController::class, 'mypage_rental'])->name('mypage.rental');
    Route::get('/rental/rentaled', [ProductController::class, 'mypage_rental_rentaled'])->name('mypage.rental.rentaled');
    Route::get('/lending', [ProductController::class, 'mypage_lending'])->name('mypage.lending');
    Route::get('/lending/rentaling', [ProductController::class, 'mypage_lending_rentaling'])->name('mypage.lending.rentaling');
});

// 管理者用ページ
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/official_register', [OfficialController::class, 'index'])->name('admin.official_register');
    Route::post('/official_register', [OfficialController::class, 'store'])->name('admin.official_register.store');
    Route::get('/brand_register', [BrandController::class, 'index'])->name('admin.brand_register');
    Route::post('/brand_register', [BrandController::class, 'store'])->name('admin.brand_register.store');
    Route::get('/motif_register', [MotifController::class, 'index'])->name('admin.motif_register');
    Route::post('/motif_register', [MotifController::class, 'store'])->name('admin.motif_register.store');
    // 商品登録
    Route::get('/product_register_search', [ProductController::class, 'search_request'])->name('admin.product_register.search');
    Route::get('/product_register', [ProductController::class, 'post'])->name('admin.product_register');
    Route::post('/product_register', [ProductController::class, 'store'])->name('admin.product_register.store');

});

require __DIR__.'/auth.php';
