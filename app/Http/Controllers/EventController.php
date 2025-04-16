<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events(){
        $events = Event::all();
        return response()->json([
            'status' => true,
            'message' => 'events data',
            'data' => $events
        ], 200);
    }
}
