<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListCourse extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function sub_course() {
        return $this->belongsTo(SubCourse::class, 'sub_course_id', 'id');
    }
}
