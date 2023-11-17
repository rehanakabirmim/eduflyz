<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $primaryKey = 'tm_id';

    protected $fillable = [
        'name',
        'title',
        'comment',
        'tm_img'
    ];
}
