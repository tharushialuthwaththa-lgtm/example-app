<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('home');

    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function products()
    {
        return view('products');
    }
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function orders()
    {
        return view('orders');
    }
    public function customers()
    {
        return view('customers');
    }
}






