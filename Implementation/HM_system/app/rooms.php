<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class rooms extends Model
{
    protected $table="room";
    protected $fillable = [
        'roomType', 'roomPrice',
    ];
}
