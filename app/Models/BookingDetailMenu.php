<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetailMenu extends Model
{
    use HasFactory;

    protected $table = 'booking_detail_menu';

    protected $fillable = [
        'booking_detail_id',
        'menu_id',
        'quantity',
        'total'
    ];
}
