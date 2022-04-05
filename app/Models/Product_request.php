<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'lender_user_id',
        'official_product_id',
        'brand_name',
        'name',
        'type',
        'image',
        'story',
        'scratch_detail',
        'material',
        'serial_number',
        'is_case',
        'is_guarantee',
        'is_purchasable',
    ];

// 商品の貸し手ユーザーとのリレーション
    public function lender_user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
