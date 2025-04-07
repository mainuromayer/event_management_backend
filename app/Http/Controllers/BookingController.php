<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getAllBookings(){
        $bookings = Booking::with(['user', 'event'])->get();
        return response()->json([
            'message' => 'Data found',
            'data' => $bookings
        ]);
        
    }
}
