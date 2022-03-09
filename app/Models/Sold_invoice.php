<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold_invoice extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sold()
    {
        return $this->belongsTo(Sold::class);
    }

    public function sold_payments()
    {
        return $this->hasMany(Sold_payment::class);
    }
}
