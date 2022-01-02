<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = [
        'number',
        'capacity',
        'public',
        'image',
        'vacant'
    ];

    public function getImageUrl() {
        return route('slot-image', $this->number);
    }

}
