<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/about', function () {

    $profile = \App\Models\Profile::first();

    return view('public.about', compact('profile'));

})->name('about');
Route::get('/skills', function () {

    $skills = \App\Models\Skill::orderBy('proficiency', 'desc')->get();

    return view('public.skills', compact('skills'));

})->name('skills');


Route::get('/projects', function () {

    $projects = \App\Models\Project::where('is_published', true)
        ->latest()
        ->get();

    return view('public.projects', compact('projects'));

})->name('projects');


Route::get('/experience', function () {

    $experiences = \App\Models\Experience::orderBy('sort_order')
        ->orderByDesc('start_date')
        ->get();

    return view('public.experience', compact('experiences'));

})->name('experience');

Route::get('/education', function () {

    $education = \App\Models\Education::orderByDesc('end_date')
        ->get();

    return view('public.education', compact('education'));

})->name('education');



Route::get('/certifications', function () {

    $certifications = \App\Models\Certification::where('is_active', true)
        ->latest('issue_date')
        ->get();

    return view('public.certifications', compact('certifications'));

})->name('certifications');

Route::get('/technology', function () {
    return view('public.technology');
})->name('technology');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

    Route::get('/cv', function () {
    $profile = \App\Models\Profile::first();

    return view('public.cv', compact('profile'));
})->name('cv');