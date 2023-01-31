<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function teacher() {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
