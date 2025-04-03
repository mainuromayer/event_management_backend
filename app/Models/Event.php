<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
