<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|string'
        ]);

        if($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()->first()], 500);
        }

        $image = new Media;
        $image->image = $request->image;
        $image->save();

        return response()->json(['success' => true, 'message' => 'Image saved']);
    }

    public function destroy(Media $media) {
        $media->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted']);
    }
}
