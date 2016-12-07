<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class resultEditController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    function editResults()
    {
        return view('rezultati-index');
    }
}
