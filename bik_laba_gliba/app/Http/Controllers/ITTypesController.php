<?php

namespace App\Http\Controllers;

use App\Models\Entities\ITType;

class ITTypesController extends Controller
{
    public function getITTypes()
    {
        return ITType::all();
    }

    public function getITType($id)
    {
        $itType = ITType::where('id', $id)->first();

        return $itType ?? response()->json(['message' => 'Not Found!'], 404);
    }
}
