
@extends('layouts.public')

@section('content')

<section
    class="skills-section py-5"
    style="
        background: linear-gradient(
            135deg,
            #efeff1 0%,
            #dedfdf 50%,
            #cddcf3 100%
        );
        min-height: 100vh;
    "
>

    <div class="container">

        {{-- PAGE HEADER --}}
        <div class="skills-header text-center mb-5">

            {{-- <span class="skills-label">
                PROFESSIONAL SKILLS
            </span> --}}

            <h1 class="fw-bold mt-2">
                Technical Skills
            </h1>

            <p class="text-muted mx-auto">
                Technologies and technical capabilities developed through
                academic projects, professional experience, and continuous learning.
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
                                $category = strtolower($skill->category);

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

                                    default
                                        => 'bi-tools',
                                };
                            @endphp

                            <div class="skill-icon">
                                <i class="bi {{ $icon }}"></i>
                            </div>

                            <div class="ms-3">

                                <h5 class="skill-name mb-1">
                                    {{ $skill->name }}
                                </h5>

                                <span class="skill-category">
                                    {{ $skill->category }}
                                </span>

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


                        {{-- PROGRESS --}}
                        <div class="skill-progress">

                            <div
                                class="skill-progress-bar"
                                style="width: {{ $skill->proficiency }}%"
                            ></div>

                        </div>

                    </div>

                </div>

            @empty

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


        {{-- BOTTOM MESSAGE --}}
        @if($skills->count())

            <div class="skills-footer text-center mt-5">

                <div class="skills-footer-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>

                <h5 class="fw-bold mt-3">
                    Always Learning & Improving
                </h5>

                <p class="text-muted mb-0">
                    Continuously developing my technical knowledge and
                    exploring new technologies to build better solutions.
                </p>

            </div>

        @endif

    </div>

</section>


{{-- PAGE CSS --}}
<style>

    .skills-section {
        min-height: 100vh;
    }


    /* HEADER */

    .skills-header {
        max-width: 720px;
        margin: auto;
    }

    .skills-label {
        color: #0d6efd;
        font-size: 0.82rem;
        font-weight: 700;
        letter-spacing: 1.5px;
    }

    .skills-header h1 {
        font-size: 2.5rem;
        color: #172033;
    }

    .skills-header p {
        line-height: 1.7;
        margin-top: 12px;
    }


    /* CARD */

    .skill-card {
        background: #ffffff;
        border: 1px solid #e5eaf2;
        border-radius: 18px;
        padding: 25px;
        transition: all 0.25s ease;
    }

    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(30, 60, 100, 0.10);
        border-color: #cddcf5;
    }


    /* ICON */

    .skill-icon {
        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #eaf2ff;
        color: #0d6efd;

        border-radius: 14px;

        font-size: 1.35rem;

        flex-shrink: 0;
    }


    /* TEXT */

    .skill-name {
        color: #172033;
        font-size: 1.05rem;
    }

    .skill-category {
        color: #7a8495;
        font-size: 0.82rem;
    }


    /* PROFICIENCY */

    .skill-level {
        color: #7a8495;
        font-size: 0.82rem;
    }

    .skill-percentage {
        color: #0d6efd;
        font-size: 0.85rem;
        font-weight: 700;
    }


    /* PROGRESS */

    .skill-progress {
        width: 100%;
        height: 7px;

        background: #edf1f7;

        border-radius: 20px;
        overflow: hidden;
    }

    .skill-progress-bar {
        height: 100%;

        background: #0d6efd;

        border-radius: 20px;

        transition: width 0.6s ease;
    }


    /* FOOTER */

    .skills-footer {
        max-width: 650px;
        margin-left: auto;
        margin-right: auto;
    }

    .skills-footer-icon {
        width: 48px;
        height: 48px;

        margin: auto;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #eaf2ff;
        color: #0d6efd;

        font-size: 1.2rem;
    }

    .skills-footer h5 {
        color: #172033;
    }

    .skills-footer p {
        line-height: 1.7;
    }


    /* EMPTY STATE */

    .empty-skills i {
        font-size: 2.5rem;
        color: #0d6efd;
    }


    /* RESPONSIVE */

    @media (max-width: 768px) {

        .skills-header h1 {
            font-size: 2rem;
        }

        .skill-card {
            padding: 22px;
        }

    }

</style>

@endsection


