<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\SiteController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route; 

Route::get('/', function () {
    return view('welcome');
})->name('home');

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
});

require __DIR__.'/auth.php';

## INSPECTION CRUD ROUTES

# create a route request for the INSPECTION page
Route::get('/inspections', [InspectionController::class, 'index']); # main page for all inspections

# create a show route request for the INSPECTION detail page
Route::get('/inspections/{id}', [InspectionController::class, 'show']); # detail page for each inspection with the id parameter of inspection

# Create a report route request for the REPORT page
Route::get('/reports', [ReportController::class, 'index']); # main index page for all the reports of the solar inspected sites

# Create a show route request for the report index detail page
Route::get('/reports/{id}', [ReportController::class, 'show']); # detail page for each report with the id parameter of report

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

