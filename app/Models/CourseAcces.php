<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseAcces extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
