<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CalorieController extends Controller
{
    public function userHistory(Request $request) {
        // Валидация данных
        $validator = Validator::make($request->all(), [
            'day' => 'required',
            'sortType' => 'in:asc,desc',
            'count' => 'max:100',
        ]);

        // Возвражение ошибок при валидации
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $day = $request->day;
        $sortType = (is_null($request->sortType)) ? 'desc' : $request->sortType;
        $count = (is_null($request->count)) ? 1 : $request->count;

        // Получение данных
        $userId = Auth::check();
//        $history = User::find($userId)->histories()->orderBy('current_date',$sortType)->get();

        return response()->json($userId, 200);
    }
}
