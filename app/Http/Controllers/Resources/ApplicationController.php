<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ApplicationAnswer;
use App\Models\ApplicationResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public function __construct()
    {
        //
    }

    public function store(Request $request, Application $application) {
        if($application->end >= Carbon::now()->timestamp) {
            abort(404);
        }

        $validatorRules = [
            'discord' => 'required',
            'gdpr' => 'required|boolean',
        ];

        switch ($application->route) {
            case 'slot':
                $validatorRules['drivers'] = 'required';
                $validatorRules['name'] = 'required';
                $validatorRules['slot'] = 'required|exists:slots,id';
                $validatorRules['tmp'] = 'required';
                break;
            case 'staff':
                $validatorRules['role'] = 'required|in:Convoy Control,Media,Official Streamer, Partnered Streamer';
                $validatorRules['steam'] = 'required';
                $validatorRules['tmp'] = 'required';

        }

        $validator = Validator::make($request->all(), $validatorRules);

        if($validator->fails()) {
            return response()->json(['error' => true, 'message' => $validator->errors()->first()]);
        }

        $fields = [];

        foreach ($request->all() as $key => $value) {
            if($value !== null) {
                if($key === 'custom') {
                    foreach ($value as $ckey => $cvalue) {
                        if($ckey === 'routes') {
                            if(count($cvalue)) {
                                $fields[] = [
                                    "name" => ucfirst($key),
                                    "value" => implode(',', $cvalue)
                                ];
                            }
                        } else if ($cvalue !== null) {
                            $fields[] = [
                                "name" => ucfirst($ckey),
                                "value" => $cvalue
                            ];
                        }
                    }
                } else if ($key !== 'gdpr') {
                    if($key === 'tmp') $key = 'TMP';
                    if($key === 'name') $key = 'VTC Name';

                    $fields[] = [
                        "name" => ucfirst($key),
                        "value" => $value
                    ];
                }
            }
        }


        Http::post('https://discord.com/api/webhooks/834069371847573604/ZPBzZM6p0Fi-orKz9E6wn7CklN_itmxYcAB0QJmiESwk1H2zdqULB9A4pvCQywVpHPPa', [
            "content" => null,
            "embeds" => [
                [
                    "title" => $application->title,
                    "color" => 6151979,
                    "fields" => $fields
                ]
            ]
        ]);

        return response()->json(['success' => true, 'message' => 'Submitted']);
    }
}
