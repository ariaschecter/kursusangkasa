<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function user() {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function course() {
        return $this->hasMany(Course::class, 'teacher_id', 'id');
    }

}
