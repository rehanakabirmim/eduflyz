<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_name',
        'course_id',
        'slug',
        'lesson_img',
        'lesson_link',
        'lesson_duration',
        'lesson_serial'

    ];

}
