<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if($username=="admin" && $password=="1234")
        {
            return redirect()->route('dashboard');
        }

        return back()->with('error','Invalid Username or Password');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
