<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function targetDate(Request $request) {
        $validator = Validator::make($request->all(), [
            'weight' => 'required|max:512|numeric',
            'purpose_weight' => 'required|max:512|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $weight = (float) $request->weight;
        $purpose_weight = (float) $request->purpose_weight;

        if ($weight > $purpose_weight) {
            $difference = $weight - $purpose_weight;
        } elseif ($weight < $purpose_weight) {
            $difference = $purpose_weight - $weight;
        } elseif ($weight == $purpose_weight) {
            $difference = 0;
        }

        $weightPerWeek = [
            '0.1' => "",
            '0.2' => "",
            '0.3' => "",
            '0.4' => "",
            '0.5' => "",
            '0.6' => "",
            '0.7' => "",
        ];

        foreach ($weightPerWeek as $key => $value) {
            $count = (integer) ($difference / (float) $key);
            $date = date_create(date('Y-m-d'));
            $date = date_modify($date, "{$count} week");
            $weightPerWeek[$key] = date_format($date, 'j \of F Y');
        }

        return response()->json($weightPerWeek, 200);
    }
}
