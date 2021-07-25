<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'intake',
        'course_id',
        'optional_course',
        'delivery',
        'sponsorship',
        'profileImage',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function registration(){
        return $this->hasMany(Registration::class);
    }

}
