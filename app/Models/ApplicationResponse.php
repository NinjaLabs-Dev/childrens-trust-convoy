<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationResponse extends Model
{
    protected $fillable = [
        'application_id'
    ];

    public function answers() {
        return $this->hasMany(ApplicationAnswer::class, 'application_response_id', 'id');
    }

    public function application() {
        return $this->belongsTo(Application::class);
    }
}
