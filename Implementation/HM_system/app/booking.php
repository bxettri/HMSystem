<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table="booking";
    protected $fillable = [
        'id', 'roomId','bookingDate','checkInDate','checkOutDate',
    ];
}
