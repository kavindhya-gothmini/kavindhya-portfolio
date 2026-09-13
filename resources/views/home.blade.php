@extends('layouts.public')

@section('content')

<style>

/* =========================================================
   GLOBAL HOME PAGE
========================================================= */

.home-page {
    background: #ccd0d4;
    color: #1f2937;
}

.home-section {
    padding: 90px 0;
}

.home-section-light {
    background: #daeaf9;
}

.home-section-white {
    background: #ffffff;
}


/* =========================================================
   SECTION HEADINGS
========================================================= */

.home-section-heading {
    max-width: 750px;
    margin: 0 auto 55px;
    text-align: center;
}

.home-section-label {
    display: inline-block;
    margin-bottom: 10px;

    color: #0d6efd;

    font-size: 0.78rem;
    font-weight: 700;

    letter-spacing: 2px;
    text-transform: uppercase;
}

.home-section-heading h2 {
    margin-bottom: 15px;

    color: #111827;

    font-size: 2.35rem;
    font-weight: 750;
}

.home-section-heading p {
    margin: 0 auto;

    max-width: 680px;

    color: #6b7280;

    line-height: 1.8;
}


/* =========================================================
   HERO SECTION
========================================================= */

.home-hero {
    position: relative;

    min-height: 720px;

    display: flex;
    align-items: center;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #f1f5f9 0%,
            #e8eef7 50%,
            #dce8f7 100%
        );
}

.home-hero::before {
    content: "";

    position: absolute;

    width: 450px;
    height: 450px;

    top: -180px;
    right: -120px;

    border-radius: 50%;

    background: rgba(13, 110, 253, 0.07);
}

.home-hero::after {
    content: "";

    position: absolute;

    width: 300px;
    height: 300px;

    bottom: -140px;
    left: -100px;

    border-radius: 50%;

    background: rgba(13, 110, 253, 0.05);
}

.home-hero-content {
    position: relative;
    z-index: 2;
}

.home-hero-subtitle {
    display: inline-flex;

    align-items: center;
    gap: 8px;

    padding: 8px 16px;

    margin-bottom: 20px;

    background: rgba(255, 255, 255, 0.75);

    border: 1px solid rgba(13, 110, 253, 0.12);

    border-radius: 50px;

    color: #0d6efd;

    font-size: 0.82rem;
    font-weight: 700;

    letter-spacing: 1px;
}

.home-hero h1 {
    margin-bottom: 15px;

    color: #111827;

    font-size: clamp(2.4rem, 5vw, 4.2rem);

    font-weight: 800;

    line-height: 1.15;
}

.home-hero-title {
    margin-bottom: 22px;

    color: #0d6efd;

    font-size: clamp(1.2rem, 2vw, 1.55rem);

    font-weight: 600;

    line-height: 1.5;
}

.home-hero-description {
    max-width: 680px;

    margin-bottom: 30px;

    color: #5f6b7a;

    font-size: 1.05rem;

    line-height: 1.9;
}


/* =========================================================
   HERO BUTTONS
========================================================= */

.home-hero-buttons {
    display: flex;

    flex-wrap: wrap;

    gap: 12px;

    margin-bottom: 35px;
}

.home-hero-btn {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 8px;

    padding: 12px 22px;

    border-radius: 8px;

    font-weight: 600;

    text-decoration: none;

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

.home-hero-btn:hover {
    transform: translateY(-3px);
}

.home-btn-primary {
    background: #0d6efd;

    color: #ffffff;

    box-shadow: 0 8px 22px rgba(13, 110, 253, 0.20);
}

.home-btn-primary:hover {
    color: #ffffff;

    box-shadow: 0 12px 28px rgba(13, 110, 253, 0.28);
}

.home-btn-outline {
    background: #ffffff;

    color: #212529;

    border: 1px solid #d9dee5;
}

.home-btn-outline:hover {
    color: #0d6efd;

    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
}


/* =========================================================
   HERO SOCIAL / QUICK LINKS
========================================================= */

.home-hero-links {
    display: flex;

    flex-wrap: wrap;

    gap: 20px;
}

.home-hero-links a {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: #586273;

    font-size: 0.9rem;
    font-weight: 600;

    text-decoration: none;

    transition: color 0.2s ease;
}

.home-hero-links a:hover {
    color: #0d6efd;
}


/* =========================================================
   HERO IMAGE
========================================================= */

.home-hero-image-column {
    position: relative;

    z-index: 2;
}

.home-profile-wrapper {
    position: relative;

    width: 350px;
    height: 350px;

    margin: 0 auto;
}

.home-profile-wrapper::before {
    content: "";

    position: absolute;

    inset: -18px;

    border: 1px solid rgba(13, 110, 253, 0.15);

    border-radius: 50%;
}

.home-profile-wrapper::after {
    content: "";

    position: absolute;

    inset: -38px;

    border: 1px dashed rgba(13, 110, 253, 0.13);

    border-radius: 50%;
}

.home-profile-image {
    position: relative;

    z-index: 2;

    width: 350px;
    height: 350px;

    object-fit: cover;

    border-radius: 50%;

    border: 7px solid #ffffff;

    box-shadow:
        0 25px 60px rgba(0, 0, 0, 0.15);
}

.home-profile-placeholder {
    position: relative;

    z-index: 2;

    width: 350px;
    height: 350px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #ffffff;

    border: 7px solid #ffffff;

    box-shadow:
        0 25px 60px rgba(0, 0, 0, 0.15);

    color: #0d6efd;

    font-size: 70px;
    font-weight: 800;
}


/* =========================================================
   ABOUT SECTION
   Profile image removed here intentionally.
========================================================= */

.about-home-content {
    max-width: 950px;

    margin: 0 auto;
}

.about-home-content h3 {
    margin-bottom: 5px;

    color: #111827;

    font-size: 1.9rem;
}

.about-home-content h5 {
    font-size: 1.05rem;

    line-height: 1.6;
}

.about-home-content p {
    color: #5f6b7a;

    line-height: 1.85;
}

.about-home-content .lead {
    color: #4b5563;

    font-size: 1.08rem;

    line-height: 1.9;
}


/* =========================================================
   CAREER OBJECTIVE
========================================================= */

.career-objective-card {
    padding: 25px;

    background: #f8fafc;

    border: 1px solid #e8edf3;

    border-left: 4px solid #0d6efd;

    border-radius: 12px;
}

.career-objective-card h4 {
    font-size: 1.05rem;
}

.career-objective-card p {
    margin-bottom: 0;

    font-size: 0.95rem;
}

/* =========================================================
   PROFESSIONAL SKILLS
========================================================= */

.skill-card {
    padding: 28px;

    background: #ffffff;

    border: 1px solid #e7ebf0;

    border-radius: 16px;

    box-shadow:
        0 8px 25px rgba(0, 0, 0, 0.05);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        border-color 0.3s ease;
}

.skill-card:hover {
    transform: translateY(-7px);

    border-color: rgba(217, 219, 219, 0.66);

    box-shadow:
        0 16px 35px rgba(0, 0, 0, 0.09);
}


/* SKILL ICON */

.skill-icon {
    width: 52px;
    height: 52px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    background: #edf5ff;

    border: 1px solid #dceaff;

    border-radius: 12px;

    color: #0d6efd;

    font-size: 1.35rem;

    transition:
        background 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease;
}

.skill-card:hover .skill-icon {
    background: #0d6efd;

    color: #ffffff;

    transform: scale(1.05);
}


/* SKILL NAME */

.skill-name {
    color: #1f2937;

    font-size: 1rem;

    font-weight: 700;

    line-height: 1.4;
}


/* SKILL CATEGORY */

.skill-category {
    color: #8a94a3;

    font-size: 0.78rem;

    font-weight: 500;

    line-height: 1.4;
}


/* PROFICIENCY LABEL */

.skill-level {
    color: #697586;

    font-size: 0.78rem;

    font-weight: 600;
}


/* PERCENTAGE */

.skill-percentage {
    color: #0d6efd;

    font-size: 0.82rem;

    font-weight: 700;
}


/* PROGRESS CONTAINER */

.skill-progress {
    width: 100%;

    height: 7px;

    overflow: hidden;

    background: #edf1f5;

    border-radius: 50px;
}


/* PROGRESS BAR */

.skill-progress-bar {
    height: 100%;

    background: #0d6efd;

    border-radius: 50px;

    transition: width 0.8s ease;
}


/* EMPTY STATE */

.empty-skills {
    padding: 30px;

    color: #8a94a3;
}

.empty-skills > i {
    font-size: 2.5rem;

    color: #b4bdc9;
}

.empty-skills h5 {
    color: #4b5563;
}


/* =========================================================
   RESPONSIVE SKILLS
========================================================= */

@media (max-width: 767px) {

    .skill-card {
        padding: 24px;
    }

    .skill-icon {
        width: 48px;
        height: 48px;

        font-size: 1.2rem;
    }

}

/* =========================================================
   PROJECTS
========================================================= */

.home-project-card {
    height: 100%;

    overflow: hidden;

    background: #ffffff;

    border: 1px solid #e9edf2;

    border-radius: 16px;

    box-shadow:
        0 10px 28px rgba(0, 0, 0, 0.06);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.home-project-card:hover {
    transform: translateY(-8px);

    box-shadow:
        0 18px 40px rgba(0, 0, 0, 0.11);
}

.home-project-image {
    position: relative;

    height: 205px;

    overflow: hidden;

    background: #eef2f6;
}

.home-project-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform 0.4s ease;
}

.home-project-card:hover .home-project-image img {
    transform: scale(1.05);
}

.home-project-placeholder {
    height: 100%;

    display: flex;

    align-items: center;
    justify-content: center;

    color: #9aa3af;

    font-size: 0.9rem;
}

.home-project-placeholder i {
    margin-right: 8px;

    font-size: 30px;
}

.home-featured-badge {
    position: absolute;

    top: 15px;
    left: 15px;

    padding: 7px 12px;

    background: #0d6efd;

    color: #ffffff;

    border-radius: 50px;

    font-size: 0.75rem;
    font-weight: 700;
}

.home-project-body {
    padding: 25px;
}

.home-project-body h4 {
    margin-bottom: 12px;

    color: #111827;

    font-size: 1.25rem;
    font-weight: 700;

    line-height: 1.45;
}

.home-project-body p {
    color: #697586;

    font-size: 0.92rem;

    line-height: 1.7;
}

.home-project-technologies {
    display: flex;

    flex-wrap: wrap;

    gap: 6px;

    margin-top: 18px;
}

.home-project-tech {
    padding: 5px 9px;

    background: #f4f7fa;

    border: 1px solid #e3e8ee;

    border-radius: 5px;

    color: #5b6572;

    font-size: 0.72rem;
    font-weight: 600;
}

.home-project-actions {
    display: flex;

    flex-wrap: wrap;

    gap: 8px;

    margin-top: 20px;
}

.home-project-actions a {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 6px;

    padding: 8px 13px;

    border-radius: 6px;

    font-size: 0.8rem;
    font-weight: 600;

    text-decoration: none;
}


/* =========================================================
   EXPERIENCE
========================================================= */

.home-experience-wrapper {
    max-width: 900px;

    margin: 0 auto;
}

.home-experience-card {
    position: relative;

    padding: 35px;

    background: #ffffff;

    border: 1px solid #e8edf3;

    border-radius: 16px;

    box-shadow:
        0 12px 32px rgba(0, 0, 0, 0.06);
}

.home-experience-date {
    display: inline-block;

    margin-bottom: 15px;

    padding: 7px 13px;

    background: #edf5ff;

    border-radius: 50px;

    color: #0d6efd;

    font-size: 0.78rem;
    font-weight: 700;
}

.home-experience-card h3 {
    margin-bottom: 8px;

    color: #111827;

    font-size: 1.45rem;
}

.home-experience-company {
    margin-bottom: 8px;

    color: #0d6efd;

    font-size: 1rem;
    font-weight: 700;
}

.home-experience-location {
    margin-bottom: 18px;

    color: #8a94a3;

    font-size: 0.85rem;
}

.home-experience-summary {
    color: #606b79;

    line-height: 1.8;
}


/* =========================================================
   EDUCATION
========================================================= */

.home-education-card {
    height: 100%;

    padding: 30px;

    background: #ffffff;

    border: 1px solid #e8edf3;

    border-radius: 15px;

    box-shadow:
        0 10px 28px rgba(0, 0, 0, 0.05);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.home-education-card:hover {
    transform: translateY(-5px);

    box-shadow:
        0 16px 35px rgba(0, 0, 0, 0.09);
}

.home-education-badge {
    display: inline-block;

    margin-bottom: 15px;

    padding: 6px 11px;

    background: #edf5ff;

    color: #0d6efd;

    border-radius: 50px;

    font-size: 0.72rem;
    font-weight: 700;
}

.home-education-card h4 {
    margin-bottom: 10px;

    color: #111827;

    font-size: 1.2rem;
}

.home-education-card h5 {
    margin-bottom: 15px;

    color: #0d6efd;

    font-size: 0.95rem;
    font-weight: 600;
}

.home-education-card p {
    color: #697586;

    font-size: 0.9rem;

    line-height: 1.7;
}

.home-grade {
    margin-bottom: 12px;

    color: #374151;

    font-size: 0.9rem;
}


/* =========================================================
   CONTACT
========================================================= */

.home-contact-section {
    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #eef4fb 0%,
            #e2ecf8 100%
        );
}

.home-contact-card {
    max-width: 850px;

    margin: 0 auto;

    padding: 50px 40px;

    text-align: center;

    background: rgba(255, 255, 255, 0.88);

    border: 1px solid rgba(255, 255, 255, 0.9);

    border-radius: 20px;

    box-shadow:
        0 18px 45px rgba(0, 0, 0, 0.08);
}

.home-contact-icon {
    width: 65px;
    height: 65px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin: 0 auto 20px;

    background: #edf5ff;

    border-radius: 50%;

    color: #0d6efd;

    font-size: 1.6rem;
}

.home-contact-card h2 {
    margin-bottom: 15px;

    color: #111827;

    font-size: 2rem;
    font-weight: 750;
}

.home-contact-card p {
    max-width: 620px;

    margin: 0 auto 28px;

    color: #687384;

    line-height: 1.8;
}

.home-contact-email {
    margin-bottom: 25px;

    color: #0d6efd;

    font-weight: 600;
}


/* =========================================================
   GENERAL BUTTON
========================================================= */

.home-outline-btn {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 8px;

    padding: 10px 19px;

    background: transparent;

    border: 1px solid #0d6efd;

    border-radius: 7px;

    color: #0d6efd;

    font-size: 0.85rem;
    font-weight: 600;

    text-decoration: none;

    transition: all 0.25s ease;
}

.home-outline-btn:hover {
    background: #0d6efd;

    color: #ffffff;

    transform: translateY(-2px);
}


/* =========================================================
   EMPTY STATES
========================================================= */

.home-empty {
    padding: 35px;

    text-align: center;

    color: #8a94a3;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .home-hero {
        min-height: auto;

        padding: 100px 0;
    }

    .home-hero-image-column {
        margin-top: 60px;
    }

    .home-section {
        padding: 70px 0;
    }

}


@media (max-width: 767px) {

    .home-hero {
        padding: 75px 0;
    }

    .home-hero h1 {
        font-size: 2.4rem;
    }

    .home-hero-description {
        font-size: 0.95rem;
    }

    .home-hero-buttons {
        flex-direction: column;
    }

    .home-hero-btn {
        width: 100%;
    }

    .home-profile-wrapper {
        width: 270px;
        height: 270px;
    }

    .home-profile-image,
    .home-profile-placeholder {
        width: 270px;
        height: 270px;
    }

    .home-section {
        padding: 60px 0;
    }

    .home-section-heading h2 {
        font-size: 1.9rem;
    }

    .home-experience-card {
        padding: 25px;
    }

    .home-contact-card {
        padding: 35px 22px;
    }

}


/* =========================================================
   ACCESSIBILITY
========================================================= */

.home-page a:focus-visible {
    outline: 3px solid rgba(13, 110, 253, 0.35);

    outline-offset: 3px;
}

</style>


<div class="home-page">


{{-- =========================================================
     HERO SECTION
========================================================= --}}

<section class="home-hero">

    <div class="container">

        <div class="row align-items-center g-5">


            {{-- HERO CONTENT --}}

            <div class="col-lg-7">

                <div class="home-hero-content">



                    @if($profile)

                        <h1>
                            {{ $profile->full_name }}
                        </h1>


                        @if($profile->professional_title)

                            <div class="home-hero-title">
                                {{ $profile->professional_title }}
                            </div>

                        @endif


                        @if($profile->tagline)

                            <p class="home-hero-description">
                                {{ $profile->tagline }}
                            </p>

                        @elseif($profile->short_bio)

                            <p class="home-hero-description">
                                {{ $profile->short_bio }}
                            </p>

                        @endif

                    @else

                        <h1>
                            Software Engineering Professional
                        </h1>

                        <p class="home-hero-description">
                            Building practical software solutions through
                            software engineering, web technologies, data,
                            and emerging technologies.
                        </p>

                    @endif


                    {{-- HERO BUTTONS --}}

                    <div class="home-hero-buttons">

                        <a
                            href="{{ route('projects') }}"
                            class="home-hero-btn home-btn-primary"
                        >

                            <i class="bi bi-folder2-open"></i>

                            View My Projects

                        </a>


                        <a
                            href="{{ route('cv') }}"
                            class="home-hero-btn home-btn-outline"
                        >

                            <i class="bi bi-file-earmark-text"></i>

                            View CV

                        </a>


                        <a
                            href="{{ route('contact') }}"
                            class="home-hero-btn home-btn-outline"
                        >

                            <i class="bi bi-chat-dots"></i>

                            Contact Me

                        </a>

                    </div>


                    {{-- QUICK LINKS --}}

                    
{{-- QUICK LINKS --}}

<div class="home-hero-links">

    {{-- LINKEDIN --}}
    @if($profile && $profile->linkedin_url)

        @php
            $linkedinUrl = trim($profile->linkedin_url);

            if (!preg_match('/^https?:\/\//i', $linkedinUrl)) {
                $linkedinUrl = 'https://' . $linkedinUrl;
            }
        @endphp

        <a
            href="{{ $linkedinUrl }}"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Visit my LinkedIn profile"
        >
            <i class="bi bi-linkedin"></i>
            LinkedIn
        </a>

    @endif

</div>




                </div>

            </div>


            {{-- HERO PROFILE IMAGE --}}

            <div class="col-lg-5 home-hero-image-column">

                @if($profile && $profile->profile_image)

                    <div class="home-profile-wrapper">

                        <img
                            src="{{ asset('storage/' . $profile->profile_image) }}"
                            alt="{{ $profile->full_name }}"
                            class="home-profile-image"
                        >

                    </div>

                @else

                    <div class="home-profile-wrapper">

                        <div class="home-profile-placeholder">

                            <span>KG</span>

                        </div>

                    </div>

                @endif

            </div>


        </div>

    </div>

</section>



{{-- =========================================================
     ABOUT SECTION
     Profile image intentionally removed.
========================================================= --}}

<section
    id="about"
    class="home-section home-section-white"
>

    <div class="container">


        <div class="home-section-heading">

            <span  class="home-section-label">
              
            </span>

            <h2>
               ABOUT ME
            </h2>

            <p>
                My professional background, technical interests,
                and career direction.
            </p>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="about-home-content">

                    @if($profile)

                        <h3 class="fw-bold">
                            {{ $profile->full_name }}
                        </h3>


                        @if($profile->professional_title)

                            <h5 class="text-primary mt-2 mb-4">

                                {{ $profile->professional_title }}

                            </h5>

                        @endif


                        @if($profile->short_bio)

                            <p class="lead">

                                {{ $profile->short_bio }}

                            </p>

                        @endif


                        @if($profile->about)

                            <p>

                                {{ $profile->about }}

                            </p>

                        @endif


                        @if($profile->career_objective)

                            <div class="career-objective-card mt-4">

                                <h4 class="fw-bold mb-2">

                                    <i class="bi bi-bullseye text-primary me-2"></i>

                                    Career Objective

                                </h4>

                                <p>

                                    {{ $profile->career_objective }}

                                </p>

                            </div>

                        @endif


                    @else

                        <p class="text-muted">

                            Professional profile information will be
                            available here soon.

                        </p>

                    @endif


                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SKILLS SECTION
========================================================= --}}

<section
    id="skills"
    class="home-section home-section-light"
>

    <div class="container">


        {{-- SECTION HEADER --}}

        <div class="home-section-heading">

            <span class="home-section-label">
                
            </span>

            <h2>
                Technical Skills
            </h2>

            <p>
                Technologies and technical areas developed through
                academic learning, practical experience, and continuous
                professional development.
            </p>

        </div>


        {{-- SKILLS --}}

        <div class="row g-4">

            @forelse($skills as $skill)

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card h-100">


                        {{-- TOP --}}

                        <div class="d-flex align-items-center mb-3">

                            @php

                                $category = strtolower($skill->category ?? '');

                                $icon = match (true) {

                                    str_contains($category, 'programming')
                                        => 'bi-code-slash',

                                    str_contains($category, 'web')
                                        => 'bi-globe2',

                                    str_contains($category, 'database')
                                        => 'bi-database',

                                    str_contains($category, 'data')
                                        => 'bi-bar-chart-line',

                                    str_contains($category, 'software')
                                        => 'bi-cpu',

                                    str_contains($category, 'network')
                                        => 'bi-diagram-3',

                                    str_contains($category, 'power')
                                        => 'bi-grid',

                                    str_contains($category, 'testing')
                                        => 'bi-check2-circle',

                                    str_contains($category, 'development')
                                        => 'bi-laptop',

                                    str_contains($category, 'cloud')
                                        => 'bi-cloud',

                                    str_contains($category, 'design')
                                        => 'bi-palette',

                                    default
                                        => 'bi-tools',

                                };

                            @endphp


                            {{-- ICON --}}

                            <div class="skill-icon">

                                <i class="bi {{ $icon }}"></i>

                            </div>


                            {{-- NAME + CATEGORY --}}

                            <div class="ms-3">

                                <h5 class="skill-name mb-1">

                                    {{ $skill->name }}

                                </h5>


                                @if($skill->category)

                                    <span class="skill-category">

                                        {{ $skill->category }}

                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- PROFICIENCY --}}

                        <div class="d-flex justify-content-between align-items-center mb-2">

                            <span class="skill-level">

                                Proficiency

                            </span>


                            <span class="skill-percentage">

                                {{ $skill->proficiency }}%

                            </span>

                        </div>


                        {{-- PROGRESS BAR --}}

                        <div class="skill-progress">

                            <div
                                class="skill-progress-bar"
                                style="width: {{ $skill->proficiency }}%"
                                role="progressbar"
                                aria-valuenow="{{ $skill->proficiency }}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>

                        </div>


                    </div>

                </div>


            @empty

                {{-- EMPTY STATE --}}

                <div class="col-12 text-center py-5">

                    <div class="empty-skills">

                        <i class="bi bi-tools"></i>

                        <h5 class="mt-3">

                            No skills available

                        </h5>

                        <p class="text-muted">

                            Skills will appear here once they are added.

                        </p>

                    </div>

                </div>

            @endforelse

        </div>


        {{-- VIEW ALL SKILLS BUTTON --}}

        <div class="text-center mt-5">

            <a
                href="{{ route('skills') }}"
                class="home-outline-btn"
            >

                <i class="bi bi-arrow-right"></i>

                View All Skills

            </a>

        </div>


    </div>

</section>
{{-- =========================================================
     PROJECTS SECTION
========================================================= --}}

<section
    id="projects"
    class="home-section home-section-white"
>

    <div class="container">


        <div class="home-section-heading">

            <span class="home-section-label">
              
            </span>

            <h2>
                Featured Projects
            </h2>

            <p>
                Selected software engineering and technology projects
                demonstrating practical development experience.
            </p>

        </div>


        <div class="row g-4">


            @forelse($featuredProjects as $project)

                <div class="col-md-6 col-lg-4">

                    <article class="home-project-card">


                        {{-- PROJECT IMAGE --}}

                        <div class="home-project-image">

                            @if($project->featured_image)

                                <img
                                    src="{{ asset('storage/' . $project->featured_image) }}"
                                    alt="{{ $project->title }}"
                                >

                            @else

                                <div class="home-project-placeholder">

                                    <i class="bi bi-code-square"></i>

                                    Project Preview

                                </div>

                            @endif


                            @if($project->is_featured)

                                <span class="home-featured-badge">

                                    <i class="bi bi-star-fill me-1"></i>

                                    Featured

                                </span>

                            @endif

                        </div>


                        {{-- PROJECT CONTENT --}}

                        <div class="home-project-body">

                            <h4>
                                {{ $project->title }}
                            </h4>


                            @if($project->short_description)

                                <p>
                                    {{ $project->short_description }}
                                </p>

                            @elseif($project->description)

                                <p>
                                    {{ Str::limit($project->description, 160) }}
                                </p>

                            @endif


                            @if($project->technologies)

                                <div class="home-project-technologies">

                                    @foreach(explode(',', $project->technologies) as $technology)

                                        @if(trim($technology) !== '')

                                            <span class="home-project-tech">

                                                {{ trim($technology) }}

                                            </span>

                                        @endif

                                    @endforeach

                                </div>

                            @endif


                            <div class="home-project-actions">


                                @if($project->github_url)

                                    <a
                                        href="{{ $project->github_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="btn btn-outline-dark btn-sm"
                                    >

                                        <i class="bi bi-github"></i>

                                        GitHub

                                    </a>

                                @endif


                                @if($project->live_url)

                                    <a
                                        href="{{ $project->live_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="btn btn-primary btn-sm"
                                    >

                                        <i class="bi bi-box-arrow-up-right"></i>

                                        Live Demo

                                    </a>

                                @endif


                            </div>

                        </div>


                    </article>

                </div>


            @empty

                <div class="col-12">

                    <div class="home-empty">

                        No featured projects available.

                    </div>

                </div>

            @endforelse


        </div>


        <div class="text-center mt-5">

            <a
                href="{{ route('projects') }}"
                class="home-outline-btn"
            >

                <i class="bi bi-folder2-open"></i>

                View All Projects

            </a>

        </div>


    </div>

</section>



{{-- =========================================================
     EXPERIENCE SECTION
========================================================= --}}

<section
    id="experience"
    class="home-section home-section-light"
>

    <div class="container">


        <div class="home-section-heading">

            <span class="home-section-label">
        
            </span>

            <h2>
                Professional Experience
            </h2>

            <p>
                Practical experience across software engineering,
                IT support, networking, and enterprise operations.
            </p>

        </div>


        @if($experience)

            <div class="home-experience-wrapper">

                <div class="home-experience-card">


                    <span class="home-experience-date">

                        <i class="bi bi-calendar3 me-1"></i>

                        {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }}

                        -

                        @if($experience->is_current)

                            Present

                        @elseif($experience->end_date)

                            {{ \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}

                        @endif

                    </span>


                    <h3>

                        {{ $experience->job_title }}

                    </h3>


                    <div class="home-experience-company">

                        <i class="bi bi-building me-1"></i>

                        {{ $experience->company }}

                    </div>


                    @if($experience->location)

                        <div class="home-experience-location">

                            <i class="bi bi-geo-alt me-1"></i>

                            {{ $experience->location }}

                        </div>

                    @endif


                    @if($experience->summary)

                        <p class="home-experience-summary">

                            {{ $experience->summary }}

                        </p>

                    @endif


                </div>

            </div>


        @else

            <div class="home-empty">

                No professional experience available.

            </div>

        @endif


        <div class="text-center mt-5">

            <a
                href="{{ route('experience') }}"
                class="home-outline-btn"
            >

                <i class="bi bi-arrow-right"></i>

                View Full Experience

            </a>

        </div>


    </div>

</section>



{{-- =========================================================
     EDUCATION SECTION
========================================================= --}}

<section
    id="education"
    class="home-section home-section-white"
>

    <div class="container">


        <div class="home-section-heading">

            <span class="home-section-label">
                
            </span>

            <h2>
                Academic Background
            </h2>

            <p>
                Academic qualifications supporting my software engineering
                and technology career.
            </p>

        </div>


        <div class="row g-4">


            @forelse($education as $item)

                <div class="col-md-6">

                    <div class="home-education-card">


                        <span class="home-education-badge">

                            <i class="bi bi-mortarboard-fill me-1"></i>

                            Academic Qualification

                        </span>


                        <h4>

                            {{ $item->qualification }}

                        </h4>


                        <h5>

                            {{ $item->institution }}

                        </h5>


                        @if($item->grade)

                            <div class="home-grade">

                                <strong>
                                    Grade:
                                </strong>

                                {{ $item->grade }}

                            </div>

                        @endif


                        @if($item->description)

                            <p class="mb-0">

                                {{ $item->description }}

                            </p>

                        @endif


                    </div>

                </div>


            @empty

                <div class="col-12">

                    <div class="home-empty">

                        No education information available.

                    </div>

                </div>

            @endforelse


        </div>


        <div class="text-center mt-5">

            <a
                href="{{ route('education') }}"
                class="home-outline-btn"
            >

                <i class="bi bi-mortarboard"></i>

                View Education

            </a>

        </div>


    </div>

</section>



{{-- =========================================================
     CONTACT SECTION
========================================================= --}}

<section
    id="contact"
    class="home-section home-contact-section"
>

    <div class="container">


        <div class="home-contact-card">


            <div class="home-contact-icon">

                <i class="bi bi-chat-dots"></i>

            </div>


            <h2>

                Let's Connect

            </h2>


            <p>

                Interested in discussing a software project,
                technology, collaboration, or professional opportunity?
                Feel free to get in touch.

            </p>


            @if($profile && $profile->email)

                <div class="home-contact-email">

                    <i class="bi bi-envelope me-2"></i>

                    {{ $profile->email }}

                </div>

            @endif


            <a
                href="{{ route('contact') }}"
                class="home-hero-btn home-btn-primary"
            >

                <i class="bi bi-send"></i>

                Contact Me

            </a>


        </div>

    </div>

</section>


</div>


@endsection