<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'number',
        'start',
        'start_time',
        'end',
        'image',
        'truckfest'
    ];

    public function route_image() {
        return $this->image;
    }
}
