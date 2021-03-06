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

    public function topmanagement()
    {
        return view('.headerAboutCompany/topmanagement');
    }

    public function partners()
    {
        return view('.headerAboutCompany/partners');
    }

    public function clients()
    {
        return view('.headerAboutCompany/clients');
    }

    public function finances()
    {
        return view('.headerAboutCompany/finances');
    }

    public function reinsurance()
    {
        return view('.headerAboutCompany/reinsurance');
    }

    public function insrules()
    {
        return view('.headerAboutCompany/insrules');
    }

    public function insblog()
    {
        return view('.headerAboutCompany/insblog');
    }

    public function mission()
    {
        return view('.headerAboutCompany/mission');
    }

    public function requisites()
    {
        return view('.headerAboutCompany/requisites');
    }

    public function interest()
    {
        return view('.headerForIndividuals/interest');
    }

    public function kaskosto()
    {
        return view('.headerForIndividuals/kaskosto');
    }

    public function company()
    {
        return view('company');
    }
    public function companyWork()
    {
        return view('companyWork');
    }
    public function audit()
    {
        return view('audit');
    }

    public function contact()
    {
        return view('contact');
    }

    public function nsur()
    {
        return view('ur.nsur');
    }
    public function gruz()
    {
        return view('ur.gruz');
    }
    public function autour()
    {
        return view('ur.autour');
    }
    public function saveur()
    {
        return view('ur.saveur');
    }
    public function savepep()
    {
        return view('ur.savepep');
    }
    public function obot()
    {
        return view('ur.obot');
    }
    public function otwork()
    {
        return view('ur.otWork');
    }
    public function obsave()
    {
        return view('ur.obsave');
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

    public function becomeagent()
    {
        return view('becomeagent');
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
            if ($key != 'type' and $key != 'sum' and $key != 'phone') {
                $data .= $key . ': ' . $value . '<br>';
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
        if ($request->post()) {
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
