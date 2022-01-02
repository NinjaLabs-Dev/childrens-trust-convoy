<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationAnswer extends Model
{
    protected $fillable = [
        'application_response_id',
        'key',
        'value'
    ];

    public function response() {
        return $this->belongsTo(ApplicationResponse::class);
    }
}
