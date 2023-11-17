<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $primaryKey = 'exam_id';

    protected $fillable = [
        'course_id',
        'exam_name',
        'slug',

    ];

    public function questions(){
        return $this->hasMany(Question::class, 'exam_id', 'exam_id');
    }
}
