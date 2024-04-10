<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_detail_id',
        'booking_status',
        'total_amount',
    ];

    public function bookingDetail()
    {
        return $this->belongsTo(BookingDetail::class);
    }
}
