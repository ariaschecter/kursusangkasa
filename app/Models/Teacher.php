<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function user() {
        return $this->belongsTo(User::class, 'id', 'id')->orderBy('name', 'ASC');
    }

    public function course() {
        return $this->hasMany(Course::class, 'teacher_id', 'id');
    }

    public function review() {
        return $this->hasMany(Review::class, 'teacher_id', 'id');
    }
}
