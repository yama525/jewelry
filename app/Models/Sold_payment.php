<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold_payment extends Model
{
    use HasFactory;

    public function sold_invoice()
    {
        return $this->belongsTo(Sold_invoice::class);
    }
}
