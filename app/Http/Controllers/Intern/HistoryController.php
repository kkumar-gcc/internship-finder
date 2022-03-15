<?php

namespace App\Http\Controllers\Intern;

use App\CommandClass\HistoryCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use App\Models\History;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories=History::where('intern_id',auth()->user()->intern->id)->get();
       
        return view('InternDashboard.task.create')
        ->with(['histories'=>$histories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryRequest $request)
    {
        $formData = $request->all();
        // dd($formData);
        try {
            $intern =  (new HistoryCommand())->newHistory($formData);
            $request->session()->flash('status', "Task created succesfully");
            return redirect('/intern/task');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoryRequest  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
   
    public function updateHistory(UpdateHistoryRequest $request, int $id)
    {
        $formData = $request->all();
        try {
            $history = (new HistoryCommand())->updateHistory($formData, $id);
            session()->flash('status', 'History updated succesfully');
            return redirect('/intern/task');
        } catch (\Throwable $th) {
            return redirect('/intern/task')->with(['error'=>($th->getMessage())]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($history);
        $history=History::find($id);
        $history->delete();

        return redirect('/intern/task');
    }
}
