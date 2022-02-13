<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Slot;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();

        return view('pages.media')->with('medias', $media);
    }
}
