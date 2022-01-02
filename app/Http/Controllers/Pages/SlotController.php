<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Slot;

class SlotController extends Controller
{
    public function index()
    {
        $slots = Slot::orderBy('number')->get();

        return view('pages.slots')->with('slots', $slots);
    }
}
