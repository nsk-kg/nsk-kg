<?php

namespace App\Http\Controllers;

use App\EnsuranseModel;
use App\Http\Requests\EnsuransRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function company()
    {
        return view('company');
    }

    public function contact()
    {
        return view('contact');
    }

    public function kasko()
    {
        return view('kasko');
    }

    public function dsdsago()
    {
        return view('dsdsago');
    }

    public function saveperson()
    {
        return view('saveperson');
    }

    public function savepersontravel()
    {
        return view('savepersontravel');
    }
    public function medic()
    {
        return view('medic');
    }
    public function ns()
    {
        return view('ns');
    }
    public function savehome()
    {
        return view('savehome');
    }
    public function ensuranse()
    {
        return view('calculator.ensuranse');
    }
    public function ensuranseCreate(EnsuransRequest $request)
    {
        $path = '';
        if ($request->file('image')) {
            $path = $request->file('image')->store('image');
        }
        $request->file = $path;

       EnsuranseModel::create(
           [
               'firstName'=>$request->firstName,
               'MidleName'=>$request->MidleName,
               'product'=>$request->product,
               'polis'=>$request->polis,
               'telephone'=>$request->telephone,
               'status'=>'0',
               'image'=>$path,
           ]
       );


    }
}
