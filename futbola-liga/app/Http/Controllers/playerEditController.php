<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class playerEditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    function editPlayers()
    {
        return view('speletaji-index');
    }
}
