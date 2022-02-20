<?php

namespace App\Http\Controllers\Intern;

use Illuminate\Http\Request;
use App\CommandClass\InternCommand;
use App\Enums\CountryEnum;
use App\Enums\GenderEnum;
use App\Http\Controllers\Controller;
use App\Models\Intern;
use App\Models\Internship;
use App\Models\Organization;

class InternController extends Controller
{
    public function index()
    {
        if (Auth()->check()) {
            return view('/InternDashboard.home');
        }
        return redirect('/login');
    }

    public function create()
    {
        if (Auth()->check()) {
            $gender = GenderEnum::toSelectArray();
            $country = CountryEnum::toSelectArray();
            return view('/InternDashboard/profile.create')
                ->with('gender', $gender)
                ->with('country', $country);
        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        $formData = $request->all();
        try {
            $intern =  (new InternCommand())->newIntern($formData);
            $request->session()->flash('status', "Profile created succesfully");
            return redirect('/intern-dashboard');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function editIntern($id)
    {
        $intern = Intern::find($id);
        $gender = GenderEnum::toSelectArray();
        $country = CountryEnum::toSelectArray();
        return view('\internDashboard\profile.edit')
            ->with('gender', $gender)
            ->with('country', $country)
            ->with('intern', $intern);
    }

    public function updateIntern(Request $request, $id)
    {
        $formData = $request->all();
        try {
            $intern = (new InternCommand())->updateIntern($formData, $id);
            session()->flash('status', 'Profile updated succesfully');
            return redirect('/intern-dashboard');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }


    public function organizations()
    {
        $organizations = Organization::all();
        // dd($organizations);
        return view('InternDashboard/organization.searchOrganization')
            ->with('organizations', $organizations);
    }

    public function organizationProfile($token)
    {
        $organization =Organization::select('*')->where('id',$token)->first();
        // dd($organization);
        return view('InternDashboard/organization.organizationProfile')
        ->with(['organization'=>$organization]);

    }
    public function internshipProfile($token)
    {
        $internship=Internship::where('id',$token)->first();
       
        return view('InternDashboard.internshipProfile')
        ->with(['internship'=>$internship]);
    }
    public function searchOrganization(Request $request)
    {
        $request->flash();
        $interns = Intern::where("area_of_interest", "LIKE", "%{$request['query']}%")
            ->orWhere("first_name", "LIKE", "%{$request['query']}%")
            ->get();
      

     
        return view('OrganisationDashboard.Intern.searchIntern')->with([
            "interns" => $interns
        ]);
    }
    public function findOrganization(Request $request)
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
