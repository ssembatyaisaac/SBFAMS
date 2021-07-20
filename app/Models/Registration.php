<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'academic_year',
        'semster'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
