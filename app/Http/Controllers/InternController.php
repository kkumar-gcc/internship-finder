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
    public function store(Request $request)
    {
        $formData = $request->all();
        try {
            $intern =  (new InternCommand())->newIntern($formData);
            return response()->json($intern['data']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function editIntern(Request $request, $id)
    {
        $formData = $request->all();
        try {
            $intern = (new InternCommand())->updateIntern($formData, $id);
            return response()->json($intern['data']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }
}
