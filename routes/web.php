<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\SiteController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route; 

# create a route request for the SITE page
Route::get('/sites', [SiteController::class, 'index']); # main page for all sites

# create a show route request for the SITE detail page
Route::get('/sites/{id}', [SiteController::class, 'show']); # detail page for each site with the id parameter of site

# create a route request for the INSPECTION page
Route::get('/inspections', [InspectionController::class, 'index']); # main page for all inspections

# create a show route request for the INSPECTION detail page
Route::get('/inspections/{id}', [InspectionController::class, 'show']); # detail page for each inspection with the id parameter of inspection

# Create a report route request for the REPORT page
Route::get('/reports', [ReportController::class, 'index']); # main index page for all the reports of the solar inspected sites

# Create a show route request for the report index detail page
Route::get('/reports/{id}', [ReportController::class, 'show']); # detail page for each report with the id parameter of report

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
