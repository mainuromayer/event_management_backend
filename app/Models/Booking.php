<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function event(): BelongsTo{
        return $this->belongsTo(Event::class);
    }
}
