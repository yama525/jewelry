<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'lender_user_id',
        
    ];

// 商品の貸し手ユーザーとのリレーション
    public function lender_user()
    {
        return $this->belongsTo(User::class);
    }

// 商品登録リクエストテーブルとのリレーション
    public function product_requests()
    {
        return $this->hasOne(Product_request::class);
    }

// 商品写真とのリレーション
    public function product_images()
    {
        return $this->hasMany(Product_image::class);
    }
# productに紐づく写真（配列）の一番最初の要素を取得する
    public function getThumbnail() {
        return $this->product_images[0]->image;
    }
// # productに紐づく全ての商品写真を取得 → 一旦これは必要なし
//     public function getAllProductImages() {
//         return $this->product_images->image;
//     }

// rentals テーブルとのリレーション
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
    // public function getRentalProduct()
    // {
    //     return $this->$rental_products->
    // }

// レビューテーブルとのリレーション
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

// お気に入りテーブルとのリレーション
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    //いいねされているかを判定するメソッド。
    public function isLikedBy($user): bool {
        return Favorite::where('user_id', $user->id)->where('product_id', $this->id)->first() !==null;
    }

// オフィシャルテーブルとのリレーション
    public function official_product()
    {
        return $this->belongsTo(Official::class, 'official_product_id', 'official_product_id');
    }
    // オフィシャルの商品名取得
    public function getOfficialName(){
        return $this->official_product->name;
    }
    // ブランド名取得
    public function getBrandName(){
        return $this->official_product->brand->brand_name;
    }

// サブスクプランテーブルとのリレーション
    public function subscription_plan()
    {
        return $this->belongsTo(Subscription_plan::class);
    }

// ソールドテーブルとのリレーション
    public function sold()
    {
        return $this->hasOne(Sold::class);
    }

// リングテーブルとのリレーション
    public function ring()
    {
        return $this->hasOne(Ring::class);
    }
    // リングテーブルから情報取得
    public function getRingData()
    {
        return $this->ring->ring_size;
    }

// ネックレステーブルとのリレーション
    public function necklace()
    {
        return $this->hasOne(Necklace::class);
    }
    // ネックレステーブルから情報取得
    public function getNecklaceData()
    {
        return $this->necklace->length;
    }

// ブレスレットテーブルとのリレーション
    public function bracelet()
    {
        return $this->hasOne(Bracelet::class);
    }
    // ブレスレットテーブルから情報取得
    public function getBraceletData()
    {
        return $this->bracelet;
    }

// イヤリングテーブルとのリレーション
    public function earing()
    {
        return $this->hasOne(Earing::class);
    }
    // イヤリングテーブルから情報取得
    public function getEaringData()
    {
        return $this->earing->earing_type;
    }

// その他ジュエリーテーブルとのリレーション
    public function other_jewelry()
    {
        return $this->hasOne(Other_jewelry::class);
    }
    // その他ジュエリーテーブルから情報取得
    public function getOtherData()
    {
        return $this->other_jewelry;
    }
}


