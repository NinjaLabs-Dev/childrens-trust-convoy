<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlotImage extends Model
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
