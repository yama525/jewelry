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

    public function lender_user()
    {
        return $this->belongsTo(User::class);
    }
}


