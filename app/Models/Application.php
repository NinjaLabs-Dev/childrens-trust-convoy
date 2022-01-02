<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

class Application extends Model
{
    protected $fillable = [
        'title',
        'description',
        'end',
        'route',
        'button_text'
    ];

    protected $appends = [
        'url'
    ];

    public static function current() {
        return self::where('end', '>=', Carbon::now()->timestamp)->get();
    }

    public function getUrlAttribute() {
        return route('application', $this->route);
    }

    public function responses() {
        return $this->hasMany(ApplicationResponse::class, 'application_id', 'id');
    }
}
