<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function services(Request $request){
        return view('services');
    }
}
