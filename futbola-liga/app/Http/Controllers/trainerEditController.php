<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Input;
use Request;

class trainerEditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    function editTrainers()
    {
        if(Request::ajax()){
            $data = Input::all();
            print_r($data);die;
        }
        //return view('treneri-index');
    }
}