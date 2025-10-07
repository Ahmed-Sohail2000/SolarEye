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

    public function show($id) # detail page for each site
    
    {
        $site = Site::findOrFail($id); # find the site by id or fail if not found

        return view('sites.show', compact('site'));
    }

    public function create() # creaet a new site page form
    
    {
        $sites = Site::all();

        return view('sites.create', ["sites" => $sites]); # return the view with the site data
    }

    public function store(Request $request) # store the new site data

    {
        # create a new site instance and validate the request data
        $site = Site::create([

            'name' => $request->name,
            'capacity' => $request->capacity,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'user_id' => auth()->id(), # set the user_id to the currently authenticated user
            'site_id' => uniqid(), # generate a unique id for the site
        ]);
        
        return redirect() -> route('sites.show', $site->id); # redirect to the sites index page
    }

}
