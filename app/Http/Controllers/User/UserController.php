<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerForm() {
        return view('user.register');
    }

    public function loginForm() {
        return view('user.login');
    }

    public function store(StoreRegistrationRequest $request) {
//        dd($request);
        $weight = $request->input('weight');
        $growth = $request->input('growth');
        $age = $request->input('age');
//        $gender = $request->input('gender');
//        $workout = $request->input('workout');
//        $paceInKilograms = (float) $request->input('pace');

//        $paceInKilocalories = $paceInKilograms * 7700;
//
//        switch ($gender) {
//            case 'male':
//                $caloriesPerDay = ((88.36 + (13.4 * $weight) + (4.8 * $growth) - (5.7 * $age)) * $workout) - $paceInKilocalories;
//                break;
//            case 'female':
//                $caloriesPerDay = ((447.6 + (9.2 * $weight) + (3.1 * $growth) - (4.3 * $age)) * $workout) - $paceInKilocalories;
//                break;
//        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'weight' => $weight,
            'growth' => $growth,
            'age' => $age,


            'purpose' => 'up',
            'pace' => 0.5,
            'purpose_weight' => 80,
            'calories_per_day' => 2000,
            'gender' => 'Male',
            'workout' => 'easy',

//            'purpose' => $request->input('purpose'),
//            'pace' => $paceInKilograms,
//            'purpose_weight' => $request->input('purpose_weight'),
//            'calories_per_day' => $caloriesPerDay,
//            'gender' => $gender,
//            'workout' => $workout,
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }

    public function auth(Request $request) {
        $validation = $request->validate([
            ''
        ]);
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('index');
    }
}
