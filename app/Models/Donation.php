<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Donation extends Model
{
    use Notifiable;

    protected $fillable = [
        'donation_id',
        'donation_name',
        'donation_message',
        'donation_amount',
        'donation_country_code',
        'raisedPercent',
        'raisedTotal',
        'created_at',
    ];
}
