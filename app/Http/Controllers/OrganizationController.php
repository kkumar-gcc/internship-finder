<?php

namespace App\Http\Controllers;

use App\CommandClass\OrganizationCommand;
use Illuminate\Http\Request;
use App\Models\Organization;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;

class OrganizationController extends Controller
{
    public function store(Request $request)
    {
        $formData = $request->all();
   
        try {
            $intern =  (new OrganizationCommand())->newOrganization($formData);
            
            return response()->json($intern['data']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function editOrganization(Request $request, $id)
    {
        $formData = $request->all();
        try {
            $intern = (new OrganizationCommand())->updateOrganization($formData, $id);
            return response()->json($intern['data']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }
}
