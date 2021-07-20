<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'registration_id',
        'course_id',
        'receipt_id',
        'accountant_id',
    ];

    public function registration(){
        $this->belongsTo(Registration::class);
    }

    public function accountant(){
        $this->belongsTo(Accountant::class);
    }

}
