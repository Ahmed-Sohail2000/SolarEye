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

    public function store(Request $request) # store the new site data (POST METHOD)

    {
        // 1. validate the input form
        $validated = $request->validate([

            'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'capacity' => 'required|numeric|min:0',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            'user_id' => auth()->id(),
        ]); 

        // user auth 
        // $validated['user_id'] = auth()->id(); # set the user_id to the currently authenticated user

        // 2. Create the site with validated data
        $site = Site::create($validated);
        
        // Redirect back to the show page with the success message
        return redirect() -> route('sites.show', $site->id)->with('success', '✅ Site Created Successfully!'); # redirect to the sites index page
    }

    public function edit($id) # edit the site data

    {   
        $site = Site::find($id); # find the site by id

        return view('sites.edit', compact('site')); # return the view with the site data

    }

    public function update(Request $request, $id) # update the site data

    {
        $site = Site::findOrFail($id); # find the site by id or fail if not found

        $validated = $request->validate([ # update the site data with the request data

            'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'capacity' => 'required|numeric|min:0',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            'user_id' => auth()->id(),
        ]);

        // add the user auth
        // $validated['user_id'] = auth()->id(); // assign the current user

        // update the site
        $site->update($validated);

        return redirect()->route('sites.show', $site->id)->with('success', '✅ Site Updated Successfully!'); # redirect to the site detail page
    }

    public function destroy($id) # delete the site id data from the list of the sites
    
    {
        $site = Site::find($id); # find the site by id 

        $site -> delete(); # set the site instance to delete

        return redirect()->route('sites.index', $site->id);
    }
}
