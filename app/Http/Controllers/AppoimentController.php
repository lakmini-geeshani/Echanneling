<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppoimentController extends Controller
{
    //
    public function show()
    {
        return view('user.channel');
    }
    public function appoiment()
    {
        return view('user.appoiment');
    }

}
