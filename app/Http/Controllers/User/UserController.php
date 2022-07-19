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

    public function store(Request $request) {

        $weight = (int) $request->input('weight');
        $growth = (int) $request->input('growth');
        $age = (int) $request->input('age');
        $gender = $request->input('gender');
        $workout = $request->input('workout');
        $paceInKilograms = (float) $request->input('pace');

        $paceInKilocalories = $paceInKilograms * 7700;

        switch ($gender) {
            case 'male':
                $caloriesPerDay = ((88.36 + (13.4 * $weight) + (4.8 * $growth) - (5.7 * $age)) * $workout) - ($paceInKilocalories / 7);
                break;
            case 'female':
                $caloriesPerDay = ((447.6 + (9.2 * $weight) + (3.1 * $growth) - (4.3 * $age)) * $workout) - ($paceInKilocalories / 7);
                break;
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'weight' => $weight,
            'growth' => $growth,
            'age' => $age,

            'purpose' => $request->input('purpose'),
            'pace' => $paceInKilograms,
            'purpose_weight' => $request->input('purpose_weight'),
            'calories_per_day' => $caloriesPerDay,
            'gender' => $gender,
            'workout' => $workout,
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }

    public function auth(Request $request) {
        $rememberMe =  ($request->input('rememberMe') === "1") ? 1 : 0;

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $rememberMe)) {
            return redirect()->route('calories.index');
        }

        return redirect()->route('calories.index');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('index');
    }
}
