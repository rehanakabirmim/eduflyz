<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'category_id',
        'teacher_id',
        'price',
        'course_summary',
        'course_img',
        'course_description',
        'course_learnop',
        'course_requirment',
        'intro_link'

    ];

    public function lessons(){
        return $this->hasMany(Lesson::class, 'question_id', 'id');
    }
}
