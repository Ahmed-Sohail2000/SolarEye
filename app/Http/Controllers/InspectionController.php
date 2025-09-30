<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;
use App\Models\Site;
use App\Models\Report;
use App\Models\User;

class InspectionController extends Controller
{
    # created inspection controller for the inspection page
    public function index()
    
    {
        $inspections = Inspection::all(); # get all inspections

        return view('inspections.index', compact('inspections')); # return the inspection index view
    }

    public function show($id) # detail page for each inspection
    
    {
        $inspection = Inspection::findOrFail($id); # find the inspection by id or fail if not found

        return view('inspections.show', compact('inspection')); # return the inspection show view with the inspection data
    }
}
