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
                'firstName' => $request->firstName,
                'MidleName' => $request->MidleName,
                'product' => $request->product,
                'polis' => $request->polis,
                'telephone' => $request->telephone,
                'status' => '0',
                'image' => $path,
            ]
        );
    }
    public function recaptcha(Request $request)
    {
        $client = new Client([
            'base_uri' => 'https://google.com/recaptcha/api/',
            'timeout' => 2.0
        ]);

        $response = $client->request('POST', 'siteverify', [
            'query' => [
                'secret' => env('CAPTCHA_SECRET'),
                'response' => $request->token
            ]
        ]);
        $result = json_decode($response->getBody()->getContents());

        if ($result->success) {
            return 1;
        } else {
            return 0;
        }

    }
    public function story(Request $request)
    {

        $data = '';
        foreach ($request->all() as $key => $value) {
            if($key != 'type' AND $key != 'sum' AND $key != 'phone'){
                $data .= $key.': '.$value.'<br>';
            }
        }
        $requestModel = new RequestModel();
        $requestModel->type = $request->get('type');
        $requestModel->data = $data;
        $requestModel->sum = $request->get('sum');
        $requestModel->phone = $request->get('phone');
        $requestModel->status = 0;
        $requestModel->save();

    }
    public function storyMessage(Request $request)
    {
        if($request->post()){
            $requestModel = new RequestModel();
            $requestModel->type = 'message';
            $requestModel->data = $request->name;
            $requestModel->sum = 0;
            $requestModel->phone = $request->phone;
            $requestModel->status = 0;
            return view('home');
        }

    }
}
