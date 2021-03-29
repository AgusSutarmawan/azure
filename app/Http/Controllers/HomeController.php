<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('/home');
    }

    public function fibonacci()
    {

        return view('/fibonacci');
    }

    public function aritmatika()
    {
        return view('/aritmatika');
    }

}
