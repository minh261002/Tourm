<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $table = 'booking_details';

    protected $guarded = [];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}