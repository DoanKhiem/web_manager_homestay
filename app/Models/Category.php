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
        'hourly_price',
        'daily_price',
        'description',
    ];

    public function utility()
    {
        return $this->belongsTo(Utility::class);
    }

    public function numberOfRooms()
    {
        return $this->hasMany(Room::class);
    }
}
