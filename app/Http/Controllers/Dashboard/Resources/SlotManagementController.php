<?php

namespace App\Http\Controllers\Dashboard\Resources;

use App\Http\Controllers\Controller;
use App\Models\Slot;
use Illuminate\Http\Request;

class SlotManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, Slot $slot)
    {
        $slot->capacity = $request->capacity;
        $slot->vacant = $request->vacant;
        $slot->image = $request->image;
        $slot->vtc = $request->vtc;
        $slot->save();

        return response()->json(["Success" => true]);
    }
}
