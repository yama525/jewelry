<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    // const CREATED_AT = 'start_rentaling_at';
    const UPDATED_AT = NULL;

// User テーブルから２つ取る？
    public function rentaling_user()
    {
        return $this->belongsTo(User::class);
    }

    public function lender_user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function rental_invoice()
    {
        return $this->hasOne(Rental_invoice::class);
    }
}
