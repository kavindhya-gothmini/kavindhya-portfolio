@extends('layouts.public')

@section('content')

<section class="education-section py-5"style="background-color: #dcdcdc!important;">

    <div class="container">

        {{-- =========================================
             PAGE HEADER
        ========================================== --}}
        <div class="education-header text-center mb-5">

            <span class="education-label">
             
            </span>

            <h1 class= "education-label">
                ACADEMIC BACKGROUND
            </h1>

            <p class="text-muted mx-auto">
                My academic journey and educational qualifications,
                reflecting my foundation in software engineering and technology.
            </p>

        </div>


        {{-- =========================================
             EDUCATION CARDS
        ========================================== --}}
        <div class="row g-4">

            @forelse($education as $item)

                <div class="col-lg-6">

                    <div class="education-card h-100">

                        {{-- =========================================
                             TOP AREA
                        ========================================== --}}
                        <div class="education-top">

                            {{-- UNIVERSITY / INSTITUTION LOGO --}}
                            <div class="university-logo">

                                @if($item->logo)

                                    <img
                                        src="{{ asset('storage/images/universities/' . $item->logo) }}"
                                        alt="{{ $item->institution }} logo"
                                    >

                                @else

                                    <i class="bi bi-building"></i>

                                @endif

                            </div>


                            {{-- DATE --}}
                            <div class="education-date">

                                @if($item->start_date)
                                    {{ \Carbon\Carbon::parse($item->start_date)->format('Y') }}
                                @endif

                                <span>—</span>

                                @if($item->end_date)
                                    {{ \Carbon\Carbon::parse($item->end_date)->format('Y') }}
                                @else
                                    Present
                                @endif

                            </div>

                        </div>


                        {{-- =========================================
                             EDUCATION CONTENT
                        ========================================== --}}
                        <div class="education-content">

                            {{-- CATEGORY --}}
                            <span class="education-badge">
                                Academic Qualification
                            </span>


                            {{-- QUALIFICATION --}}
                            <h3 class="education-title">
                                {{ $item->qualification }}
                            </h3>


                            {{-- INSTITUTION --}}
                            <h5 class="education-institution">
                                {{ $item->institution }}
                            </h5>


                            {{-- FIELD --}}
                            @if($item->field)

                                <div class="education-field">

                                    <i class="bi bi-book"></i>

                                    <span>
                                        {{ $item->field }}
                                    </span>

                                </div>

                            @endif


                            {{-- RESULT --}}
                            @if($item->result)

                                <div class="education-grade">

                                    <i class="bi bi-award"></i>

                                    <span>
                                        {{ $item->result }}
                                    </span>

                                </div>

                            @endif


                            {{-- DESCRIPTION --}}
                            @if($item->description)

                                <p class="education-description">
                                    {{ $item->description }}
                                </p>

                            @endif

                        </div>

                    </div>

                </div>

            @empty

                {{-- =========================================
                     EMPTY STATE
                ========================================== --}}
                <div class="col-12">

                    <div class="empty-education text-center">

                        <i class="bi bi-mortarboard"></i>

                        <h5 class="mt-3">
                            No education information available
                        </h5>

                        <p class="text-muted">
                            Educational qualifications will appear here.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>


        {{-- =========================================
             CONTINUOUS LEARNING
        ========================================== --}}
        @if($education->count())

            <div class="education-footer text-center mt-5">

                <div class="footer-icon">
                    <i class="bi bi-book"></i>
                </div>

                <h5 class="fw-bold mt-3">
                    Continuous Learning
                </h5>

                <p class="text-muted mb-0">
                    Continuously developing my knowledge through academic study,
                    practical experience, practical projects, and professional learning.
                </p>

            </div>

        @endif

    </div>

</section>


<style>

/* =========================================
   PAGE
========================================= */



.education-section {
    background: linear-gradient(
        135deg,
        #efeff1 0%,
        #dedfdf 50%,
        #cddcf3 100%
    );

    min-height: 100vh;
}
/* =========================================
   HEADER
========================================= */

.education-header {
    max-width: 720px;
    margin: auto;
}

.education-label {
    color: #0d6efd;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
}

.education-header h1 {
    color: #172033;
    font-size: 2.5rem;
}

.education-header p {
    line-height: 1.7;
    margin-top: 12px;
}


/* =========================================
   EDUCATION CARD
========================================= */

.education-card {
    background: #e4f0fb;
    border: 1px solid #ebf3ff;
    border-radius: 20px;
    padding: 28px;

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease,
        border-color 0.25s ease;
}

.education-card:hover {
    transform: translateY(-5px);

    box-shadow: 0 15px 35px rgba(30, 60, 100, 0.10);

    border-color: #cddcf5;
}


/* =========================================
   TOP AREA
========================================= */

.education-top {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 15px;
    margin-bottom: 25px;
}


/* =========================================
   UNIVERSITY LOGO
========================================= */

.university-logo {
    width: 120px;
    height: 120px;

    min-width: 120px;
    min-height: 120px;

    max-width: 120px;
    max-height: 120px;

    flex: 0 0 120px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #ffffff;

    border: 1px solid #e3e8f0;

    border-radius: 14px;

    padding: 8px;

    overflow: hidden;
}

.university-logo img {
    display: block;

    width: 100%;
    height: 100%;

    max-width: 100%;
    max-height: 100%;

    object-fit: contain;
}

.university-logo i {
    font-size: 1.8rem;
    color: #0d6efd;
}


/* =========================================
   DATE
========================================= */

.education-date {
    color: #0d0e0f;

    font-size: 0.85rem;

    font-weight: 600;

    background: #f1f5fa;

    padding: 8px 13px;

    border-radius: 20px;

    white-space: nowrap;
}

.education-date span {
    margin: 0 4px;
    color: #a0a8b5;
}


/* =========================================
   BADGE
========================================= */

.education-badge {
    display: inline-block;

    color: #0d6efd;

    background: #eaf2ff;

    font-size: 0.75rem;

    font-weight: 700;

    padding: 6px 11px;

    border-radius: 20px;

    margin-bottom: 13px;
}


/* =========================================
   QUALIFICATION
========================================= */

.education-title {
    color: #172033;

    font-size: 1.35rem;

    font-weight: 700;

    line-height: 1.4;

    margin-bottom: 8px;
}


/* =========================================
   INSTITUTION
========================================= */

.education-institution {
    color: #0d6efd;

    font-size: 1rem;

    font-weight: 600;

    line-height: 1.5;

    margin-bottom: 18px;
}


/* =========================================
   FIELD
========================================= */

.education-field {
    display: flex;

    align-items: center;

    gap: 8px;

    color: #4b5563;

    font-size: 0.88rem;

    margin-bottom: 10px;
}

.education-field i {
    color: #0d6efd;

    font-size: 1rem;
}


/* =========================================
   RESULT
========================================= */

.education-grade {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    color: #172033;

    background: #f7f9fc;

    border: 1px solid #e7ebf1;

    padding: 8px 13px;

    border-radius: 8px;

    font-size: 0.88rem;

    font-weight: 600;

    margin-bottom: 15px;
}

.education-grade i {
    color: #0d6efd;
}


/* =========================================
   DESCRIPTION
========================================= */

.education-description {
    color: #6b7280;

    line-height: 1.7;

    margin-bottom: 0;
}


/* =========================================
   FOOTER
========================================= */

.education-footer {
    max-width: 650px;

    margin-left: auto;
    margin-right: auto;
}

.footer-icon {
    width: 48px;
    height: 48px;

    margin: auto;

    display: flex;

    align-items: center;
    justify-content: center;

    background: #eaf2ff;

    color: #0d6efd;

    border-radius: 50%;

    font-size: 1.2rem;
}

.education-footer h5 {
    color: #172033;
}

.education-footer p {
    line-height: 1.7;
}


/* =========================================
   EMPTY STATE
========================================= */

.empty-education {
    padding: 60px 20px;
}

.empty-education i {
    font-size: 2.5rem;
    color: #0d6efd;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 768px) {

    .education-header h1 {
        font-size: 2rem;
    }

    .education-header p {
        font-size: 0.95rem;
    }

    .education-card {
        padding: 22px;
    }

    .university-logo {
        width: 90px;
        height: 90px;

        min-width: 90px;
        min-height: 90px;

        max-width: 90px;
        max-height: 90px;

        flex: 0 0 90px;
    }

    .education-date {
        font-size: 0.75rem;
        padding: 7px 10px;
    }

    .education-title {
        font-size: 1.2rem;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 480px) {

    .education-top {
        flex-direction: column;
        align-items: flex-start;
    }

    .education-date {
        align-self: flex-start;
    }

    .university-logo {
        width: 90px;
        height: 90px;

        min-width: 90px;
        min-height: 90px;

        max-width: 90px;
        max-height: 90px;

        flex: 0 0 90px;
    }

}

</style>

@endsection