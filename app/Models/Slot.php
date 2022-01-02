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

    protected $with = [
        'slot_image'
    ];

    public function vtc() {
        return $this->hasOne(VTC::class, 'slot');
    }

    public function slot_image() {
        return $this->hasOne(SlotImage::class, 'id', 'image');
    }

    public function getImageUrl() {
        return route('slot-image', $this->number);
    }

}
