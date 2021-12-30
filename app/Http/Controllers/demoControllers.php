<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoControllers extends Controller
{
    public function index(){
        return view('demo');
    }
}
