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

    // 商品写真とのリレーション
    public function product_images()
    {
        return $this->hasMany(Product_image::class);
    }
    public function getThumbnail() {
        # productに紐づく写真（配列）の一番最初の要素を取得する
        return $this->product_images[0]->image;
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function official_product()
    {
        return $this->belongsTo(Official::class, 'official_product_id', 'official_product_id');
    }
    public function getOfficialName(){
        return $this->official_product->name;
    }
    public function getBrandName(){
        return $this->official_product->brand->brand_name;
    }

    public function sold()
    {
        return $this->hasOne(Sold::class);
    }

    public function ring()
    {
        return $this->hasOne(Ring::class);
    }

    public function necklace()
    {
        return $this->hasOne(Necklace::class);
    }

    public function bracelet()
    {
        return $this->hasOne(Bracelet::class);
    }

    public function earing()
    {
        return $this->hasOne(Earing::class);
    }

    public function other_jewelrie()
    {
        return $this->hasOne(Other_jewelry::class);
    }
}


