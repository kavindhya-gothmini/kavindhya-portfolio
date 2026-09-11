<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'full_name',
        'professional_title',
        'tagline',
        'short_bio',
        'about',
        'career_objective',
        'profile_image',
        'email',
        'phone',
        'location',
        'linkedin_url',
        'github_url',
        'website_url',
        'is_active',
        'cv_path',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}