<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) {
        $request->validate([
            'email|required|email|users:unique',
            'password|required|confirmed',
            'name|required',
            'age|required',
            'weight|required',
            'gender|required',
            'growth|required',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'age' => $request->age,
            'weight' => $request->weight,
            'gender' => $request->gender,
            'growth' => $request->growth,
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
