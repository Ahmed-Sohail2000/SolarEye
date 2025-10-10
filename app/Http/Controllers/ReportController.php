<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Inspection;

class ReportController extends Controller
{
    // List all reports
    public function index()
    {
        $reports = Report::with('inspection.site')->get();
        return view('reports.index', compact('reports'));
    }

    // Show single report
    public function show($id)
    {
        $report = Report::with('inspection.site')->findOrFail($id);
        return view('reports.show', compact('report'));
    }

    // Show create form
    public function create()
    {
        $inspections = Inspection::with('site')->get();
        return view('reports.create', compact('inspections'));
    }

    // Store a new report
    public function store(Request $request)
    {
        $validated = $request->validate([
            'inspection_id' => 'required|exists:inspections,id',
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'severity' => 'required|in:low,medium,higH',
            'fault_type' => 'nullable|string|max:255',
            'photo_url' => 'nullable|url',
        ]);

        Report::create($validated);

        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $report = Report::findOrFail($id);
        $inspections = Inspection::with('site')->get();
        return view('reports.edit', compact('report', 'inspections'));
    }

    // Update a report
    public function update(Request $request, $id)
    {
        $report = Report::findOrFail($id);

        $validated = $request->validate([
            'inspection_id' => 'required|exists:inspections,id',
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'severity' => 'required|in:low,medium,high',
            'fault_type' => 'nullable|string|max:255',
            'photo_url' => 'nullable|url',
        ]);

        $report->update($validated);

        return redirect()->route('reports.show', $report->id)->with('success', 'Report updated successfully.');
    }

    // Delete a report
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }
}
