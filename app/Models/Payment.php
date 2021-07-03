<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'academic_year',
        'semster',
        'currency',
        'mode_of_payment',
        'date_of_payment',   
    ];
}
