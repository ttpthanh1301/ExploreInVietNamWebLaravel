<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Tên khách hàng
        'email',       // Email khách hàng
        'phone',       // Số điện thoại khách hàng
        'tour_id',     // ID của tour đã đặt
        'quantity',    // Số lượng người tham gia
    ];

    /**
     * Mối quan hệ với model Tour
     */
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
