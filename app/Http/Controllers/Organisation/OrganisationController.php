<?php

namespace App\Http\Controllers\Organisation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function index()
    {
       return view('/OrganisationDashboard.home');
    }
}
