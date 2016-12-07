<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class teamController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  //only authenticated users may access this controller
    }
    
    function showTeams()
    {
        $team = \App\Team::all();
        
        return view('teams', [ 'all_teams' => $team ]);
    }
}

