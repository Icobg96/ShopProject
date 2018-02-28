<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function Index(){

    return view('index');

    }

    public function Create(){
    	return view('');
    }

    public function Store(Result $req){
     
    }
}
