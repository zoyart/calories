<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerForm() {
        return view('user.register');
    }

    public function loginForm() {
        return view('user.login');
    }

    public function store(StoreRegistrationRequest $request) {

        $weight = $request->input('weight');
        $growth = $request->input('growth');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $workout = $request->input('workout');
        $paceInKilograms = (float) $request->input('pace');

        $paceInKilocalories = (float) $paceInKilograms * 7700;

        switch ($gender) {
            case 'male':
                $caloriesPerDay = ((88.36 + (13.4 * $weight) + (4.8 * $growth) - (5.7 * $age)) * $workout) - $paceInKilocalories;
                break;
            case 'female':
                $caloriesPerDay = ((447.6 + (9.2 * $weight) + (3.1 * $growth) - (4.3 * $age)) * $workout) - $paceInKilocalories;
                break;
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'gender' => $gender,
            'workout' => $workout,
            'purpose' => $request->input('purpose'),

            'pace' => $paceInKilograms,
            'weight' => $weight,
            'purpose_weight' => $request->input('purpose_weight'),
            'growth' => $growth,
            'age' => $age,
            'calories_per_day' => $caloriesPerDay,
        ]);

        Auth::login($user);

//        return redirect()->route();
    }

    public function auth() {

    }

    public function logout() {
        Auth::logout();

//        return redirect()->route();
    }
}
