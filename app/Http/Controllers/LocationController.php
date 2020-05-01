<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function locationAutoComplete(Request $request){
        return view("auto_complete");
    }
}
