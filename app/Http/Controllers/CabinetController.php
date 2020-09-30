<?php

namespace App\Http\Controllers;

use App\EnsuranseModel;
use App\Events\CallMe;
use App\Events\EnsuranseEvent;
use App\Events\RequestMe;
use App\Http\Requests\EnsuransRequest;
use App\Models\RequestUser\RequestUser;
use App\RequestModel;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabinetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $model = DB::table('request_user')->paginate(10);

        return view('cabinet.index',['model'=>$model]);
    }
    public function life()
    {

        $model = DB::table('ensuranse')->paginate(10);

        return view('cabinet.life',['model'=>$model]);
    }
    public function document($id)
    {

    }


}
