<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class resultController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  //only authenticated users may access this controller
    }
    
    function showResults()
    {
        $result = \App\Result::all();
        
        return view('results', [ 'all_results' => $result ]);
    }
}

