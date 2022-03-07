<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    use HasFactory;

    // 商品テーブルとのリレーション
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
