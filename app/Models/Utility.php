<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function numberOfCategory()
    {
        return $this->hasMany(Category::class);
    }
}
