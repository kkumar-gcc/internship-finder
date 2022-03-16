<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProposelRequest;
use App\Http\Requests\UpdateProposelRequest;
use App\Models\Internship;
use App\Models\Proposel;
use Illuminate\Http\Request;
use App\CommandClass\ProposelCommand;
use Illuminate\Support\Facades\Redirect;
use stdClass;

class ProposelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function applyForm($internName, $token)
    {
        $internship = Internship::where('id', $token)->first();
       
        $proposelStatus=new stdClass();
       
        $proposel = Proposel::where('intern_id', auth()->user()->intern->id)->where('internship_id', $token)->first();
           if($proposel){
               $proposelStatus=$proposel;
              
           }
           else{
               $proposelStatus->status='Apply';
           }
           
        return view('InternDashboard.organization.apply')
            ->with([
                'internship' => $internship,
                'proposel'=>$proposelStatus,
                
            ]);
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
    public function store(StoreProposelRequest $request,$internName,$token)
    {
        $formData = $request->all();
        try {
            $proposel =  (new ProposelCommand())->newProposel($formData);
            if($proposel['success']){
                 return redirect('/intern/internships/manage/' . auth()->user()->intern->id);
            }
            else{
                return redirect()->back()->withInput($request->input())->withErrors($proposel['data']);
            }   
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
    public function update(UpdateProposelRequest $request,int $internship,int $token)
    {
        $formData = $request->all();
        try {
            $proposel = (new ProposelCommand())->updateStatus($formData, $token);
            session()->flash('status', 'Status updated succesfully');
            return redirect('/organization/internship/'.$internship.'/proposels/'.$token);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
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
