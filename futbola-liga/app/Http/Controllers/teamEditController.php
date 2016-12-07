<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class teamEditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    function editTeams()
    {
        return view('komanda-index');
    }
}
