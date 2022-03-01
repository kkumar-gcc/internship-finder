<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProposelRequest;
use App\Http\Requests\UpdateProposelRequest;
use App\Models\Internship;
use App\Models\Proposel;
use Illuminate\Http\Request;
use App\CommandClass\ProposelCommand;
class ProposelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function applyForm($internName,$token)
    {
        // dd($token);
        $internship=Internship::where('id',$token)->first();
        return view('InternDashboard.organization.apply')
        ->with(['internship'=>$internship]);
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
     * @param  \App\Http\Requests\StoreProposelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$internName,$token)
    {
        // dd($request);
        $formData = $request->all();
        try {
            $proposel =  (new ProposelCommand())->newProposel($formData);
            $proposels=Proposel::where('id',@auth()->user()->id);
           return redirect('/intern/internships/manage/'.auth()->user()->intern->id);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposel  $proposel
     * @return \Illuminate\Http\Response
     */
    public function show(Proposel $proposel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposel  $proposel
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposel $proposel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProposelRequest  $request
     * @param  \App\Models\Proposel  $proposel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProposelRequest $request, Proposel $proposel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposel  $proposel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposel $proposel)
    {
        //
    }
}
