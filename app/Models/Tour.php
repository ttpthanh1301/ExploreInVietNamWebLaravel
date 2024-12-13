<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'price',
        'description',
        'period',
        'schedule',
        'category',
        'image', 
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
