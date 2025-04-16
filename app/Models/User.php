<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'profile_image'
    ];
    
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    
    public function notifications(){
        return $this->hasMany(Notification::class);
    }
}
