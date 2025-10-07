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
      # validate the request data
      $validated = $request -> validate([

        "name" => "required|string|max:255",
        "capacity" => "required|integer|min: 0|max: 1000",
        "latitude" => "required|string|max: 255",
        "longitude" => "required|string|max: 255",
        "site_id" => "required|exists:site,id",
      ]); 
        
      # create a new site instance
      Site::create($validated);

      return redirect("/sites") -> route("sites.index"); # redirect to the sites index page
    }

}
