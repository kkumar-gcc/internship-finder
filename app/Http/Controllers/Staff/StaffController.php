<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\CommandClass\StaffCommand;
use App\Enums\CountryEnum;
use App\Enums\GenderEnum;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('/OrganisationDashboard/Staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        try {
            $staff =  (new StaffCommand())->newStaff($formData);
            return response()->json($staff['data']);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $formData = $request->all();

        try {
            $staff =  (new StaffCommand())->updateStaff($formData, $staff->id);
            return response()->json($staff['data']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return view('staff.index');
    }
}
