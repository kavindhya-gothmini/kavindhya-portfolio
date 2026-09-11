<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;

class HomeController extends Controller
{
    /**
     * Display the public portfolio homepage.
     */
    public function index()
    {
        // Get portfolio profile
        $profile = Profile::first();

        // Get featured projects
        $featuredProjects = Project::where('is_featured', true)
            ->latest()
            ->take(3)
            ->get();

        // Get top skills
        $skills = Skill::orderBy('proficiency', 'desc')
            ->take(8)
            ->get();

        // Get latest/current experience
        $experience = Experience::orderBy('sort_order')
            ->orderByDesc('start_date')
            ->first();

        // Get education
        $education = Education::orderByDesc('end_date')
            ->get();

        // Get certifications
        $certifications = Certification::latest('issue_date')
            ->get();

        // Send data to homepage
        return view('home', compact(
            'profile',
            'featuredProjects',
            'skills',
            'experience',
            'education',
            'certifications'
        ));
    }
}
