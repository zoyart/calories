<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersCount = User::all()->count();
//        $employeeCount User::where()->count();

        return view('admin.index', compact('usersCount'));
    }

    public function login()
    {
        return view('admin.user.login');
    }

    public function auth(Request $request)
    {
        $rememberMe =  ($request->input('rememberMe') === "1") ? 1 : 0;

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $rememberMe)) {
            return redirect()->route('admin.index');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
