<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class firstController extends Controller
{

    public function home(){
        return view('welcome');
    }
}
