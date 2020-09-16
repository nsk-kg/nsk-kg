<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnsuransRequest extends FormRequest
{

    public function rules()
    {
        return [
            'firstName' => 'required',
            'MidleName' => 'required',
            'product'=> 'required',
            'polis' => 'required',
            'telephone' => 'required',
            'status' => 'required',
            'image' =>'required'
        ];
    }
}
