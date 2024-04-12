<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'phone_number',
        'booking_category',
        'period_time',
        'total_time',
        'booking_price',
        'menu_price',
        'adult',
        'kid',
    ];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'booking_detail_room', 'booking_detail_id', 'room_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'booking_detail_menu', 'booking_detail_id', 'menu_id')->withPivot('quantity', 'total');
    }


    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
