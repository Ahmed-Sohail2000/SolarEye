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

    public function create()
    
    {
        $inspections = Inspection::all(); 

        return view('inspections.create', ["inspections" => $inspections]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'site_id' => 'required|exists:sites,id',
            'inspection_date' => 'required|date',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        # save the user auth detail
        $validated['user_id'] = auth()->id();

        Inspection::create($request->all());

        return redirect()->route('inspections.index')->with('success', 'Inspection created successfully.');
    }

     public function edit(Inspection $inspection)
    {
        $sites = Site::all();
        return view('inspections.edit', compact('inspection', 'sites'));
    }

    // Update an inspection
    public function update(Request $request, $id)
    {
        $request->validate([
            'site_id' => 'required|exists:sites,id',
            'user_id'=> 'required|exists:users,id',
            'inspection_date' => 'required|date',
            'status' => 'required|string',
            'notes' => 'nullable|string|in:pending,completed,in_progress',
        ]);

        $inspection->update($request->all());

        return redirect()->route('inspections.show')->with('success', 'Inspection updated successfully.');
    }

    // Delete an inspection
    public function destroy(Inspection $inspection)
    {
        $inspection->delete();
        return redirect()->route('inspections.index')->with('success', 'Inspection deleted successfully.');
    }
}
