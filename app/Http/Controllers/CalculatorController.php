<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function osgop()
    {
        return view('calculator.osgop');
    }
    public function osgpopp()
    {
        return view('calculator.osgpopp');
    }

}
