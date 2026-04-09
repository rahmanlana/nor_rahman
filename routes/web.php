<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $settings = \App\Models\SiteSetting::first();
    $projects = \App\Models\Project::latest()->get();
    $experiences = \App\Models\Experience::orderBy('sort_order', 'asc')->get();
    
    return view('welcome', compact('settings', 'projects', 'experiences'));
});
