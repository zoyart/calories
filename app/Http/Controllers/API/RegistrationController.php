<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationRequest;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Float_;

class RegistrationController extends Controller
{
    public function targetDate(Request $request) {
        $request->validate([
            'weight' => 'required',
            'purpose_weight' => 'required',
            'purpose' => 'required',
        ]);

        $weight = (float) $request->weight;
        $purpose_weight = (float) $request->purpose_weight;

        if ($request->purpose === 'down' and $weight > $purpose_weight) {
            $difference = $weight - $purpose_weight;
        } elseif ($request->purpose === 'up' and $weight < $purpose_weight) {
            $difference = $purpose_weight - $weight;
        } else {
            return response()->json('Некорректные данные');
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

        return response()->json($weightPerWeek);
    }
}
