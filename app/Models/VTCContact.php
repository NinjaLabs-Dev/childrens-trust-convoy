<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VTCContact extends Model
{
    protected $fillable = [
        'vtc',
        'name',
        'role',
        'discord',
        'truckersmp_id',
    ];
    protected $table = 'vtc_contacts';

    public function vtc() {
        return $this->hasMany(VTC::class, 'id');
    }
}
