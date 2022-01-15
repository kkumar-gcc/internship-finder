<?php
namespace App\Http\Controllers;

use App\CommandClass\InternCommand;
use App\Models\Intern;
use App\Models\Address;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

use function PHPSTORM_META\type;

class InternController extends Controller
{
    public function index()
    {

        return view('demo');
    }
    public function searchIntern(Request $request)
    {
        $interns = Intern::where("area_of_interest", "LIKE", "%{$request['query']}%")
            ->orWhere("first_name", "LIKE", "%{$request['query']}%")
            ->get();
        return view('search')->with([
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
