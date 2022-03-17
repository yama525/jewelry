<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;

    protected $fillable = [
        'official_product_id',
        'brand_id',
        'name',
        'description',
        'size',
        'motif_id',
        'charm_length',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function motif()
    {
        return $this->belongsTo(Motif::class);
    }
}
