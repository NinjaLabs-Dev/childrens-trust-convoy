<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RouteImage extends Model
{
    protected $fillable = [
        'dir',
        'mime',
        'name',
        'url'
    ];

    protected $hidden = [
        'url'
    ];
}
