<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class playerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  //only authenticated users may access this controller
    }
    
    
    function showPlayers()
    {
        $player = \App\Player::all();
        
        return view('players', [ 'all_players' => $player ]);
    }
}

