<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function article()
    {
        return view('article');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
