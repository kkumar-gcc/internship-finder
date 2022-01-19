<?php

namespace App\Http\Controllers\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function index()
    {
        return view('/InternDashboard.home');
    }

    public function create()
    {
        return view('/InternDashboard/profile.add');
    }
}
