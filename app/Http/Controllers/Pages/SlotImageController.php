<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Slot;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class SlotImageController extends Controller
{
    public function index(Slot $slot) {
        return Cache::remember('slot-image-' . $slot->id, 500, function() use ($slot) {
            if(is_null($slot->slot_image)) return $this->notFound();

            return response(Storage::get($slot->slot_image->dir))->withHeaders([
                'Content-Type' => $slot->slot_image->type
            ]);
        });
    }

    private function notFound(): \Illuminate\Http\JsonResponse
    {
        return Response::json(array('error' => true, 'message' => 'Image missing'), 404);
    }
}
