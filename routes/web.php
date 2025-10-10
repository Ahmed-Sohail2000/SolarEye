<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\SiteController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route; 

// route for users and guests
Route::get('/', function () {

    if (auth()->check())
    
    {
        return view('welcome');
    }

    return redirect(route('login')); 
})->name('welcome');

// dashboard route
Route::get('/dashboard', function()
{
    return view('dashboard');
})
->middleware(['auth', 'verified'])->name('dashboard'); # set the view of the dashboard to the application

// authenticated user routes
Route::middleware(['auth'])->group(function () {
Route::redirect('settings', 'settings/profile');

Route::get('settings/profile', Profile::class)->name('settings.profile');
Route::get('settings/password', Password::class)->name('settings.password');
Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

## SITE CRUD ROUTES

# create a route request for the SITE page
Route::get('/sites', [SiteController::class, 'index']) -> name('sites.index'); # main page for all sites

# create a route request for the create new site page, store, remove, update, and edit 
Route::get('/sites/create', [SiteController::class, 'create']) -> name('sites.create'); # create a new site page form)

# post route to store the new site data in the database
Route::post("/sites", [SiteController::class, 'store']) -> name('sites.store'); # store the new site data
    
# create a show route request for the SITE detail page
Route::get('/sites/{id}', [SiteController::class, 'show']) -> name('sites.show'); # detail page for each site with the id parameter of site

# create an edit route request for the SITE edit page
Route::get('/sites/{id}/edit', [SiteController::class, 'edit']) -> name('sites.edit'); # edit the site data

# put route to update the site data in the database
Route::put('/sites/{id}', [SiteController::class, "update"])->name('sites.update'); # update the site data

# put route to delte the site data in the database
Route::delete('/sites/{id}', [SiteController::class, 'destroy'])->name('sites.destroy'); # delete the site data

## INSPECTION CRUD ROUTES
Route::resource('inspections', InspectionController::class);

## REPORT CRUD ROUTES
Route::resource('reports', ReportController::class);

});

require __DIR__.'/auth.php';



