<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'utility_id',
        'first_block',
        'first_block_price',
        'next_hour_price',
        'daily_price',
        'weekend_surcharge',
        'holiday_surcharge',
        'early_checkin',
        'late_checkout',
        'description',
    ];
}
