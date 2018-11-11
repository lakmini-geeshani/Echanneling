<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicareController extends Controller
{
    //
    public function medicare(Request $request){
        return view('medicare');
    }
}
