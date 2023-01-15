<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCourse extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function list_course() {
        return $this->hasMany(ListCourse::class, 'sub_course_id', 'id');
    }
}
