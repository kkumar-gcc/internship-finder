<?php

namespace App\Http\Controllers;

use App\Models\Intern;
<<<<<<< Updated upstream
use App\Http\Requests\StoreInternRequest;
use App\Http\Requests\UpdateInternRequest;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreInternRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternRequest $request)
    {
       $intern = new Intern([
        'first_name'=>$request['first_name'],
        'last_name'=>$request['last_name'],
        'other_name'=>$request['other_name'],
        'user_id'=>$request['user_id'],   
        'gender'=>$request['gender'],
        'phone'=>$request['phone'],
        'date_of_birth'=>$request['date_of_birth'],
        // 'verified_at'=>$request['verified_at'],
        'address_id'=>$request['address_id']
       ]);
      $intern->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function show(Intern $intern)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function edit(Intern $intern)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInternRequest  $request
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInternRequest $request, Intern $intern)
=======
use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Symfony\Component\Finder\SplFileInfo;
use PhpParser\Node\Stmt\TryCatch;
use SebastianBergmann\Environment\Console;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\assertNotEmpty;

class InternController extends Controller
{

    public function index()
    {
      
        return view('demo');
    }
public function searchIntern(Request $request)
{
    $interns = Intern::where("area_of_interest","LIKE","%{$request['query']}%")
    ->orWhere("first_name","LIKE","%{$request['query']}%")
    ->get();
    return view('search')->with([
        "interns"=>$interns
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

    public function store(Request $request)
>>>>>>> Stashed changes
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intern $intern)
    {
        //
    }
}
