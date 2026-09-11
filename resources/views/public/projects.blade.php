@extends('layouts.public')

@section('content')

<style>

/* =========================================================
   PROJECTS PAGE
========================================================= */

.projects-page {
    background: linear-gradient(
        135deg,
        #efeff1 0%,
        #dedfdf 50%,
        #cddcf3 100%
    );

    min-height: 100vh;
}


/* =========================================================
   PAGE HEADER
========================================================= */

.projects-header {
    max-width: 850px;
    margin: 0 auto;
}

.projects-label {
    display: inline-block;
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 2px;
    color: #0d6efd;
}

.projects-header h1 {
    font-size: 2.8rem;
}

.projects-intro {
    max-width: 720px;
    margin: 15px auto 0;
    color: #5f6368;
    font-size: 1.05rem;
    line-height: 1.8;
}


/* =========================================================
   PROJECT COUNT
========================================================= */

.project-count {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 8px 18px;

    background: rgba(255, 255, 255, 0.75);

    border: 1px solid rgba(255, 255, 255, 0.9);

    border-radius: 50px;

    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
}

.count-number {
    font-size: 1.1rem;
    font-weight: 700;
    color: #0d6efd;
}

.count-label {
    font-size: 0.9rem;
    font-weight: 600;
    color: #555;
}


/* =========================================================
   PROJECT CARD
========================================================= */

.project-card {
    background: #ffffff;

    border-radius: 18px;

    overflow: hidden;

    border: 1px solid rgba(0, 0, 0, 0.05);

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;

    display: flex;
    flex-direction: column;
}

.project-card:hover {
    transform: translateY(-8px);

    box-shadow:
        0 18px 40px rgba(0, 0, 0, 0.13);
}


/* =========================================================
   PROJECT IMAGE
========================================================= */

.project-image-wrapper {
    position: relative;

    height: 210px;

    overflow: hidden;

    background: #f1f3f5;
}

.project-image {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform 0.4s ease;
}

.project-card:hover .project-image {
    transform: scale(1.05);
}


/* =========================================================
   IMAGE PLACEHOLDER
========================================================= */

.project-image-placeholder {
    height: 100%;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 10px;

    color: #8a8f98;
}

.project-image-placeholder i {
    font-size: 42px;
}

.project-image-placeholder span {
    font-size: 0.9rem;
    font-weight: 500;
}


/* =========================================================
   FEATURED BADGE
========================================================= */

.featured-badge {
    position: absolute;

    top: 15px;
    left: 15px;

    padding: 7px 12px;

    background: rgba(13, 110, 253, 0.95);

    color: #ffffff;

    border-radius: 50px;

    font-size: 0.78rem;
    font-weight: 600;

    box-shadow:
        0 5px 15px rgba(0, 0, 0, 0.15);
}


/* =========================================================
   PROJECT CONTENT
========================================================= */

.project-content {
    padding: 25px;

    display: flex;
    flex-direction: column;

    flex: 1;
}


/* =========================================================
   CATEGORY
========================================================= */

.project-category {
    display: inline-block;

    margin-bottom: 10px;

    color: #0d6efd;

    font-size: 0.78rem;
    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: 1px;
}


/* =========================================================
   TITLE
========================================================= */

.project-title {
    font-size: 1.35rem;

    font-weight: 700;

    margin-bottom: 12px;

    line-height: 1.4;
}


/* =========================================================
   DESCRIPTIONS
========================================================= */

.project-short-description {
    font-weight: 500;

    color: #495057;

    margin-bottom: 10px;

    line-height: 1.6;
}

.project-description {
    color: #6c757d;

    font-size: 0.92rem;

    line-height: 1.7;

    display: -webkit-box;

    -webkit-line-clamp: 4;

    -webkit-box-orient: vertical;

    overflow: hidden;
}


/* =========================================================
   TECHNOLOGIES
========================================================= */

.project-technologies {
    display: flex;

    flex-wrap: wrap;

    gap: 7px;

    margin-top: 10px;
}

.technology-badge {
    padding: 6px 10px;

    background: #f1f5f9;

    color: #495057;

    border: 1px solid #e2e8f0;

    border-radius: 6px;

    font-size: 0.75rem;

    font-weight: 600;
}


/* =========================================================
   PROJECT DATE
========================================================= */

.project-date {
    margin-top: 18px;

    color: #7a7f87;

    font-size: 0.82rem;
}


/* =========================================================
   PROJECT BUTTONS
========================================================= */

.project-actions {
    display: flex;

    flex-wrap: wrap;

    gap: 10px;

    margin-top: auto;

    padding-top: 22px;
}

.project-btn {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    padding: 9px 15px;

    border-radius: 7px;

    text-decoration: none;

    font-size: 0.85rem;

    font-weight: 600;

    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease;
}

.project-btn:hover {
    transform: translateY(-2px);
}

.project-btn-github {
    background: #212529;

    color: #ffffff;
}

.project-btn-github:hover {
    color: #ffffff;

    box-shadow:
        0 6px 15px rgba(0, 0, 0, 0.18);
}

.project-btn-live {
    background: #0d6efd;

    color: #ffffff;
}

.project-btn-live:hover {
    color: #ffffff;

    box-shadow:
        0 6px 15px rgba(13, 110, 253, 0.25);
}


/* =========================================================
   EMPTY STATE
========================================================= */

.projects-empty-state {
    background: #ffffff;

    padding: 70px 30px;

    border-radius: 18px;

    box-shadow:
        0 10px 30px rgba(0, 0, 0, 0.07);
}

.empty-icon {
    font-size: 55px;

    color: #adb5bd;
}


/* =========================================================
   RESPONSIVE DESIGN
========================================================= */

@media (max-width: 767px) {

    .projects-header h1 {
        font-size: 2.2rem;
    }

    .projects-intro {
        font-size: 0.95rem;
    }

    .project-image-wrapper {
        height: 200px;
    }

    .project-content {
        padding: 20px;
    }

    .project-actions {
        flex-direction: column;
    }

    .project-btn {
        width: 100%;
    }
}

</style>


<section class="projects-page py-5">

    <div class="container">


        {{-- =================================================
             PAGE HEADER
        ================================================== --}}

        <div class="projects-header text-center mb-5">

            <span class="projects-label">
                
            </span>

            <h1 class="fw-bold mt-2">
                My Projects
            </h1>

            <p class="projects-intro">
                A collection of academic, professional, and personal
                software development projects showcasing my technical
                skills, problem-solving abilities, and practical experience.
            </p>


            {{-- Project Count --}}

            <div class="project-count mt-4">

                <span class="count-number">
                    {{ $projects->count() }}
                </span>

                <span class="count-label">
                    {{ $projects->count() == 1 ? 'Project' : 'Projects' }}
                </span>

            </div>

        </div>



        {{-- =================================================
             PROJECT GRID
        ================================================== --}}

        <div class="row g-4">


            @forelse($projects as $project)


                <div class="col-md-6 col-lg-4">


                    <article class="project-card h-100">


                        {{-- =================================================
                             PROJECT IMAGE
                        ================================================== --}}

                        <div class="project-image-wrapper">


                            @if($project->featured_image)

                                <img
                                    src="{{ asset('storage/' . $project->featured_image) }}"
                                    alt="{{ $project->title }}"
                                    class="project-image"
                                >

                            @else

                                <div class="project-image-placeholder">

                                    <i class="bi bi-code-slash"></i>

                                    <span>
                                        Project Preview
                                    </span>

                                </div>

                            @endif


                            {{-- Featured Badge --}}

                            @if($project->is_featured)

                                <span class="featured-badge">

                                    <i class="bi bi-star-fill me-1"></i>

                                    Featured

                                </span>

                            @endif


                        </div>



                        {{-- =================================================
                             PROJECT CONTENT
                        ================================================== --}}

                        <div class="project-content">


                            {{-- Category --}}

                            @if($project->category)

                                <span class="project-category">

                                    {{ $project->category->name }}

                                </span>

                            @endif


                            {{-- Title --}}

                            <h3 class="project-title">

                                {{ $project->title }}

                            </h3>


                            {{-- Short Description --}}

                            @if($project->short_description)

                                <p class="project-short-description">

                                    {{ $project->short_description }}

                                </p>

                            @endif


                            {{-- Description --}}

                            @if($project->description)

                                <p class="project-description">

                                    {{ $project->description }}

                                </p>

                            @endif


                            {{-- Technologies --}}

                            @if($project->technologies)

                                <div class="project-technologies">


                                    @foreach(explode(',', $project->technologies) as $technology)


                                        @if(trim($technology) !== '')

                                            <span class="technology-badge">

                                                {{ trim($technology) }}

                                            </span>

                                        @endif


                                    @endforeach


                                </div>

                            @endif


                            {{-- Project Date --}}

                            @if($project->project_date)

                                <div class="project-date">

                                    <i class="bi bi-calendar3 me-2"></i>

                                    {{ \Carbon\Carbon::parse($project->project_date)->format('F Y') }}

                                </div>

                            @endif


                            {{-- =================================================
                                 PROJECT ACTIONS
                            ================================================== --}}

                            <div class="project-actions">


                                @if($project->github_url)

                                    <a
                                        href="{{ $project->github_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="project-btn project-btn-github"
                                    >

                                        <i class="bi bi-github me-2"></i>

                                        GitHub

                                    </a>

                                @endif


                                @if($project->live_url)

                                    <a
                                        href="{{ $project->live_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="project-btn project-btn-live"
                                    >

                                        <i class="bi bi-box-arrow-up-right me-2"></i>

                                        Live Demo

                                    </a>

                                @endif


                            </div>


                        </div>


                    </article>


                </div>


            @empty


                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}

                <div class="col-12">

                    <div class="projects-empty-state text-center">


                        <div class="empty-icon">

                            <i class="bi bi-folder2-open"></i>

                        </div>


                        <h3 class="fw-bold mt-4">

                            No Projects Available

                        </h3>


                        <p class="text-muted mb-0">

                            Projects will be added to the portfolio soon.

                        </p>


                    </div>

                </div>


            @endforelse


        </div>

    </div>

</section>

@endsection