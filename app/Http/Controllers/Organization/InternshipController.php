<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInternshipRequest;
use App\Http\Requests\UpdateInternshipRequest;
use App\Models\Internship;
use App\Models\User;
class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(auth()->user()->organization->id);
        return view('OrganisationDashboard.Internship.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInternshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternshipRequest $request)
    {
        // dd(auth()->user()->organization->id);
        // dd($request['organization_id']);
        // dd($request['photo']);
        $internshipPhoto = "noimage.png";
        $internshipPhoto = date('mdYHis') . uniqid() . '.' . $request['photo']->extension();
        $request['photo']->move(public_path('ProfilePhoto'), $internshipPhoto);

        $internship = new Internship([
            'title' => $request['title'],
            'description' => $request['description'],
            'email' => $request['email'],
            'phoneNumber' => $request['phoneNumber'],
            'category' => $request['category'],
            'internship_type' => $request['internshiptype'],
            'designation' => $request['designation'],
            'salary' => $request['salary'],
            'qualification' => $request['qualification'],
            'skills' => $request['skills'],
            'lastdate' => $request['lastdate'],
            'location' => $request['location'],
            'zipcode' => $request['zipcode'],
            'city' => $request['city'],
            'profile_image' => $internshipPhoto,
            'organization_id' => $request['organization_id'],
        ]);
        // dd($internship);
        $internship->save();

        return redirect('organization/internships/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInternshipRequest  $request
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInternshipRequest $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
