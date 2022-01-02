<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiteStat extends Model
{
    protected $fillable = [
        'user_id',
        'action',
        'route',
        'ip'
    ];

    protected $hidden = [
        'ip'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'id');
    }
}
