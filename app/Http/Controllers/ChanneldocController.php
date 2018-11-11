<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChanneldocController extends Controller
{
    //
    public function index(){
        return view('user.channel');
    }
}
