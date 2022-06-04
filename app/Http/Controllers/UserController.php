<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'purpose' => $request->purpose,

            'pace' => $request->pace,
            'weight' => $request->weight,
            'purpose_weight' => $request->purpose_weight,
            'growth' => $request->growth,
            'age' => $request->age,
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
