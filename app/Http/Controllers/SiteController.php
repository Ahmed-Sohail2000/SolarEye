<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Inspection;
use App\Models\Report;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    # created solareye controller for the solareye site
    public function index() # main page for all sites
    {

        $sites = Site::all();

        return view('sites.index', compact('sites'));
    }

    public function show($string) # detail page for each site
    
    {
        $site = Site::where('name', $string)->findOrFail($string);

        return view('sites.show', compact('site'));
    }
}
