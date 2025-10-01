<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    # create a report controller for the report page
    public function index()
    
    {
        $reports = Report::all(); # get all reports

        return view('reports.index', compact('reports')); # return the report index view
    }

    public function show($id)
    
    {
        $report = Report::findOrFail($id); # find the report by id or fail if not found

        return view('reports.show', compact('report')); # return the report show view with the report data
    }
}
