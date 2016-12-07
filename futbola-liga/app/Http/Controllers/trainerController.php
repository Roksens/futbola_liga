<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class trainerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  //only authenticated users may access this controller
    }
    
    function showTrainers()
    {
        $trainer = \App\Trainer::all();
        
        return view('trainers', [ 'all_trainers' => $trainer ]);
    }
}

