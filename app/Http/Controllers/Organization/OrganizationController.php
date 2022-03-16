<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Intern;
use App\CommandClass\OrganizationCommand;
use App\Models\Internship;
use App\Models\Proposel;
use App\Enums\CountryEnum;
use App\Enums\GenderEnum;
use App\Models\History;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $demos = ['one', 'two'];
        $demos = (object)$demos;
        if (Auth()->check()) {
            return view('/OrganisationDashboard.home')
                ->with('demos', $demos);
        }
        return redirect('/login');
    }

    public function profile()
    {
        return view('/OrganisationDashboard.profile');
    }
    public function create()
    {
        $gender = GenderEnum::toSelectArray();
        $country = CountryEnum::toSelectArray();
        return view('OrganisationDashboard.profile.create')
            ->with('gender', $gender)
            ->with('country', $country);
    }





    public function store(Request $request)
    {
        $formData = $request->all();

        try {
            $organization =  (new OrganizationCommand())->newOrganization($formData);

            $request->session()->flash('status', "Profile created succesfully");
            return redirect('/organization/dashboard');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    // public function editOrganization($id)
    // {
    //     $organization = Organization::find($id);
    //     $gender = GenderEnum::toSelectArray();
    //     $country = CountryEnum::toSelectArray();
    //     return view('\internDashboard\profile.edit')
    //         ->with('gender', $gender)
    //         ->with('country', $country)
    //         ->with('organization', $organization);
    // }

    // public function updateIntern(Request $request, $id)
    // {
    //     $formData = $request->all();
    //     try {
    //         $intern = (new OrganizationCommand())->updateOrganization($formData, $id);
    //         session()->flash('status', 'Profile updated succesfully');
    //         return redirect('/intern-dashboard');
    //     } catch (\Throwable $th) {
    //         return response()->json($th->getMessage());
    //     }
    // }







    public function internships()
    {
        $internships = Internship::where('organization_id', auth()->user()->organization->id)->get();

        return view('OrganisationDashboard.internshipOrganization')
            ->with(['internships' => $internships]);
    }

    public function internshipDashboard(int $token,int $proposel)
    { 
        $histories = History::where('proposel_id',$proposel)->get();

        // $proposel = Proposel::where('internship_id', $token)->where('organization_id', auth()->user()->organization->id)->first();
    
        // $colors = ["Apply" => "primary", "Applied" => "warning", "Active" => "success", "Blocked" => "secondary", "Rejected" => "danger"];
        
        $proposels=Proposel::where('internship_id',$token)->get();
        return view('OrganisationDashboard.internshipDashboard.workspace')
        ->with(['proposels'=>$proposels,'histories' => $histories,'internshipId'=>$token,'proposelId'=>$proposel]);
    }
    public function internProposels($token)
    {

        $proposels = Proposel::where('internship_id', $token)->get();

        return  view('OrganisationDashboard.internProposel')
            ->with(['proposels' => $proposels]);
    }
    public function internProposel($token, $id)
    {

        $proposel = Proposel::findOrFail($id);
        $colors = ["Apply" => "primary", "Applied" => "warning", "Active" => "success", "Blocked" => "secondary", "Rejected" => "danger"];
        $color = $colors[$proposel->status];
        return  view('OrganisationDashboard.proposel')
            ->with(['proposel' => $proposel, 'color' => $color]);
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
