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
}


