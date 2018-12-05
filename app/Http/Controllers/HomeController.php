<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arduino_id;

class HomeController extends Controller
{
    public function index()
    {
    	$arduino_ids = Arduino_id::all();
    	if(is_null($arduino_ids)){
        	return view('welcome');

    	}
    	else{
    		return view('welcome')->with('arduino_ids', $arduino_ids);
    	}
    }
    public function store(Request $request){
    	$arduino_id = new Arduino_id;
    	$arduino_id['arduino_id'] = $request['arduino_id'];
        $arduino_id->save();
    }
}
