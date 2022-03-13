<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'has_spouse',
        'family_count',
        'house_type',
        'annual_income',
        'has_loan',
        'loan_price',
        'receive_place',
        'purpose',
        'purpose_detail',
        'identification',
        'identification_image1',
        'identification_image2',
        'identification_image3',
        'with_identification_image',
        'enrollment_certificate_image1',
        'enrollment_certificate_image2',
        'confirmed_flg',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
