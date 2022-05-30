<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'name',
        ]);

        $user = User::create([

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
