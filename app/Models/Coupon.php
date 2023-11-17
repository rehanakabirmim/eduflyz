<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $primaryKey = 'coupon_id';

    protected $fillable = [
        'coupon_code',
        'amount',
        'type',
    ];
}
