<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VTC extends Model
{
    protected $fillable = [
        'name',
        'slot',
        'truckersmp_id',
        'expected_attendance'
    ];
    protected $table = 'vtcs';

    public function slots(): BelongsTo {
        return $this->belongsTo(Slot::class, 'id', 'slot');
    }

    public function contacts(): HasMany {
        return $this->hasMany(VTCContact::class, 'vtc');
    }
}
