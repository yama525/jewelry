<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RenterRequestController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotifController;




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
Route::get('/category/ring', [ProductController::class, 'ring'])->name('ring');
Route::get('/category/necklace', [ProductController::class, 'necklace'])->name('necklace');
Route::get('/category/bracelet', [ProductController::class, 'bracelet'])->name('bracelet');
Route::get('/category/earing', [ProductController::class, 'earing'])->name('earing');
Route::get('/category/other', [ProductController::class, 'other'])->name('other');



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

    // 決済処理
    Route::get('checkout/{product}', [ProductController::class, 'checkout'])->name('checkout');
    Route::get('cancel/{product}', [ProductController::class, 'cancel'])->name('cancel');


    // 以下はテスト用
    // Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    // Route::put('/{product}', [ProductController::class, 'update'])->name('product.update');
    // Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    // 以下は管理者用ページ
    Route::get('/admin/official_register', [OfficialController::class, 'index'])->name('admin.official_register');
    Route::post('/admin/official_register', [OfficialController::class, 'store'])->name('admin.official_register.store');
    Route::get('/admin/brand_register', [BrandController::class, 'index'])->name('admin.brand_register');
    Route::post('/admin/brand_register', [BrandController::class, 'store'])->name('admin.brand_register.store');
    Route::get('/admin/motif_register', [MotifController::class, 'index'])->name('admin.motif_register');
    Route::post('/admin/motif_register', [MotifController::class, 'store'])->name('admin.motif_register.store');


});


require __DIR__.'/auth.php';
