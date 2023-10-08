<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model {
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'number',
        'address',
        'petname',
        'petbreed',
        'petbdate',
        'petage',
        'type',
        'sex',
        'color',
        'purpose',
        'app_date',
        'app_time',
        'comments',
        'status',
    ];

    protected $table = 'bookings';
}
