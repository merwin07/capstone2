<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reservationNo',
        'roomName',
        'checkIn',
        'checkOut',
        'adult',
        'children',
        'total',
    
        
    ];
}
