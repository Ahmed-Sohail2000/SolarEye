<?php

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
Route::get('/inspection', function(){

    return view('inspections.index');
});

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
