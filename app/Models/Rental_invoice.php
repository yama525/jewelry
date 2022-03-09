<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental_invoice extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function subscription_plan()
    {
        return $this->belongsTo(Subscription_plan::class);
    }

    public function rental_payments()
    {
        return $this->hasMany(Rental_payment::class);
    }
}
