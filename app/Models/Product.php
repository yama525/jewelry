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
        return $this->belongsTo(Official::class);
    }

    public function sold()
    {
        return $this->hasOne(Sold::class);
    }

    // 一対一の場合はよくわからない。
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


