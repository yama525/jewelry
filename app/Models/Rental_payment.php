<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental_payment extends Model
{
    use HasFactory;

    public function rental_invoice()
    {
        return $this->belongsTo(Rental_invoice::class);
    }
}
