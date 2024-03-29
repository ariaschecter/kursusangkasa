<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function teacher() {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function sub_course() {
        return $this->hasMany(SubCourse::class, 'course_id', 'id')->orderBy('sub_course_no', 'ASC');
    }

    public function list_course() {
        return $this->hasMany(ListCourse::class, 'course_id', 'id');
    }

    public function payment() {
        return $this->hasMany(Payment::class, 'course_id', 'id');
    }

    public function paycourse_acces() {
        return $this->hasMany(CourseAcces::class, 'course_id', 'id');
    }

    public function review() {
        return $this->hasMany(Review::class, 'course_id', 'id')->orderBy('created_at', 'DESC');
    }
}
