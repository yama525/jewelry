<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'product_id',
    ];

    //timestamps利用しない
    // public $timestamps = false;

    // 商品テーブルとのリレーション
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
