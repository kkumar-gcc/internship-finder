<?php

namespace App\Http\Controllers\Organisation;

use App\Http\Controllers\Controller;
use App\Models\Intern;
use App\Models\User;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function index()
    {
        if (Auth()->check()) {
            return view('/OrganisationDashboard.home');
        }
        return redirect('/login');
    }
    
    public function profile()
    {
        return view('/OrganisationDashboard.profile');
    }
    public function create()
    {
        if (Auth()->check()) {
            return view('/OrganisationDashboard/Staff.create');
        }
        redirect('/login');
    }

    public function interns()
    {
        $interns = Intern::all();
        return view('OrganisationDashboard/Intern.searchIntern')
            ->with('interns', $interns);
    }

    public function searchIntern(Request $request)
    {
        $request->flash();
        $interns = Intern::where("area_of_interest", "LIKE", "%{$request['query']}%")
            ->orWhere("first_name", "LIKE", "%{$request['query']}%")
            ->get();
      

     
        return view('OrganisationDashboard.Intern.searchIntern')->with([
            "interns" => $interns
        ]);
    }
    public function findIntern(Request $request)
    {

        $interns = Intern::where("area_of_interest", "LIKE", "%{$request->input('query')}%")
            ->get();

        $foundInterns = array();

        foreach ($interns as $intern) {
            $foundInterns[] = $intern;
        }

        return response()->json($interns);
    }
}
