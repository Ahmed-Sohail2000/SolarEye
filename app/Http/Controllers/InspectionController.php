<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;
use App\Models\Site;

class InspectionController extends Controller
{
    // Show all inspections
    public function index()
    {
        $inspections = Inspection::with('site')->get();
        return view('inspections.index', compact('inspections'));
    }

    // Show single inspection
    public function show($id)
    {
        $inspection = Inspection::with('site')->findOrFail($id);
        return view('inspections.show', compact('inspection'));
    }

    // Show create form
    public function create()
    {
        $sites = Site::all();
        return view('inspections.create', compact('sites'));
    }

    // Store new inspection
    public function store(Request $request)
    {
        $validated = $request->validate([
            'site_id' => 'required|exists:sites,id',
            'inspection_date' => 'required|date',
            'status' => 'required|in:pending,completed,in_progress',
            'notes' => 'nullable|string',
        ]);

        $validated['user_id'] = auth()->id();

        Inspection::create($validated);

        return redirect()->route('inspections.index')->with('success', 'Inspection created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $inspection = Inspection::findOrFail($id);
        $sites = Site::all();
        return view('inspections.edit', compact('inspection', 'sites'));
    }

    // Update inspection
    public function update(Request $request, $id)
    {
        $inspection = Inspection::findOrFail($id);

        $validated = $request->validate([
            'site_id' => 'required|exists:sites,id',
            'user_id' => 'required|exists:users,id',
            'inspection_date' => 'required|date',
            'status' => 'required|in:pending,completed,in_progress',
            'notes' => 'nullable|string',
        ]);

        $inspection->update($validated);

        return redirect()->route('inspections.index')->with('success', 'Inspection updated successfully.');
    }

    // Delete inspection
    public function destroy(Inspection $inspection)
    {
        $inspection->delete();
        return redirect()->route('inspections.index')->with('success', 'Inspection deleted successfully.');
    }
}
