@extends('layouts.public')

@section('content')

<style>
    /* ================================
       ABOUT PAGE
    ================================= */

   
    
.about-section {
    background: linear-gradient(
        135deg,
        #efeff1 0%,
        #dedfdf 50%,
        #cddcf3 100%
    );

    min-height: 100vh;
}

    /* Page Header */
    .about-header {
        max-width: 760px;
        margin: 0 auto;
    }

    .about-header .subtitle {
        color: #0d6efd;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .about-header h1 {
        font-size: 2.7rem;
        color: #172033;
    }

    .about-header p {
        font-size: 1rem;
    }


    /* Main Profile Card */
    .about-profile-card {
        background: #ffffff;
        border: 1px solid #e8edf5;
        border-radius: 22px;
        padding: 45px;
        box-shadow: 0 12px 40px rgba(30, 55, 90, 0.08);
    }


    /* Profile Image */
    .profile-image-wrapper {
        display: inline-block;
        padding: 7px;
        background: #ffffff;
        border-radius: 50%;
        box-shadow: 0 10px 30px rgba(30, 55, 90, 0.12);
    }

    .about-page-profile-image {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 50%;
        display: block;

        /* No blinking animation */
        animation: none;

        transition: transform 0.3s ease;
    }

    .about-page-profile-image:hover {
        transform: scale(1.03);
    }


    /* Placeholder */
    .about-page-profile-placeholder {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background: #eaf2ff;
        color: #0d6efd;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        font-weight: 700;
        box-shadow: 0 10px 30px rgba(30, 55, 90, 0.10);
    }


    /* Profile Content */
    .profile-name {
        font-size: 2rem;
        font-weight: 700;
        color: #172033;
    }

    .profile-title {
        font-size: 1.05rem;
        font-weight: 600;
        color: #0d6efd;
        margin-bottom: 22px;
    }

    .profile-description {
        color: #596579;
        line-height: 1.8;
        font-size: 1rem;
    }


    /* Career Objective */
    .career-box {
        margin-top: 25px;
        padding: 22px 25px;
        background: #f7faff;
        border-left: 4px solid #0d6efd;
        border-radius: 10px;
    }

    .career-box h5 {
        font-weight: 700;
        color: #172033;
        margin-bottom: 8px;
    }

    .career-box p {
        color: #687386;
        line-height: 1.7;
        margin-bottom: 0;
    }


    /* Interest Section */
    .interest-card {
        background: #ffffff;
        border: 1px solid #e8edf5;
        border-radius: 18px;
        padding: 30px;
        height: 100%;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .interest-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(30, 55, 90, 0.09);
    }

    .interest-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #eaf2ff;
        color: #0d6efd;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .interest-card h4 {
        color: #172033;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .interest-card p {
        color: #687386;
        line-height: 1.7;
        margin-bottom: 0;
    }


    /* Technology Tags */
    .technology-section {
        margin-top: 55px;
    }

    .technology-section h3 {
        color: #172033;
        font-weight: 700;
    }

    .tech-badge {
        display: inline-block;
        padding: 8px 15px;
        margin: 5px;
        background: #ffffff;
        border: 1px solid #dfe6f0;
        border-radius: 50px;
        color: #4d5a6d;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .tech-badge:hover {
        border-color: #0d6efd;
        color: #0d6efd;
    }


    /* Responsive */
    @media (max-width: 991px) {

        .about-profile-card {
            padding: 35px 25px;
        }

        .profile-name {
            font-size: 1.7rem;
        }

        .about-page-profile-image,
        .about-page-profile-placeholder {
            width: 210px;
            height: 210px;
        }

    }

    @media (max-width: 575px) {

        .about-header h1 {
            font-size: 2.2rem;
        }

        .about-profile-card {
            padding: 30px 20px;
        }

        .about-page-profile-image,
        .about-page-profile-placeholder {
            width: 180px;
            height: 180px;
        }

        .profile-name {
            font-size: 1.5rem;
        }

    }
</style>


<section class="about-section py-5" style="background-color: #dcdcdc !important;">

    <div class="container">


        {{-- ================================
             PAGE HEADER
        ================================= --}}

        <div class="about-header text-center mb-5">

            <div class="subtitle mb-2">
              
            </div>

            <h1 class="fw-bold mt-2">
                About Me
            </h1>

            <p class="text-muted mt-3">
                My background, experience, technical interests, and professional direction.
            </p>

        </div>



        {{-- ================================
             PROFILE AREA
        ================================= --}}

        @if($profile)

            <div class="about-profile-card">

                <div class="row align-items-center g-5">


                    {{-- PROFILE IMAGE --}}

                    <div class="col-lg-4 text-center">

                        <div class="profile-image-wrapper">

                            @if($profile->profile_image)

                                <img
                                    src="{{ asset('storage/' . $profile->profile_image) }}"
                                    alt="{{ $profile->full_name }}"
                                    class="about-page-profile-image"
                                >

                            @else

                                <div class="about-page-profile-placeholder">
                                    KG
                                </div>

                            @endif

                        </div>

                    </div>



                    {{-- PROFILE INFORMATION --}}

                    <div class="col-lg-8">

                        <h2 class="profile-name mb-2">
                            {{ $profile->full_name }}
                        </h2>

                        <div class="profile-title">
                            {{ $profile->professional_title }}
                        </div>


                        @if($profile->short_bio)

                            <p class="profile-description mb-3">
                                {{ $profile->short_bio }}
                            </p>

                        @endif


                        @if($profile->about)

                            <p class="profile-description mb-0">
                                {{ $profile->about }}
                            </p>

                        @endif


                        {{-- CAREER OBJECTIVE --}}

                        @if($profile->career_objective)

                            <div class="career-box">

                                <h5>
                                    Career Objective
                                </h5>

                                <p>
                                    {{ $profile->career_objective }}
                                </p>

                            </div>

                        @endif

                    </div>

                </div>

            </div>

        @else

            <div class="text-center py-5">

                <p class="text-muted">
                    Profile information is currently unavailable.
                </p>

            </div>

        @endif



        {{-- ================================
             PROFESSIONAL INTERESTS
        ================================= --}}

        <div class="mt-5 pt-3">

            <div class="text-center mb-4">

               {{-- <div class="subtitle mb-2">
                    Areas of Interest
                </div>--}}

                <h2 class="fw-bold">
                    Professional Focus
                </h2>

            </div>


            <div class="row g-4">


                {{-- SOFTWARE ENGINEERING --}}

                <div class="col-md-4">

                    <div class="interest-card">

                        <div class="interest-icon">
                           <i class="bi bi-code-slash"></i>
                        </div>

                        <h4>
                            Software Engineering
                        </h4>

                        <p>
                            Designing, developing, testing, and improving
                            practical software solutions based on real-world
                            requirements.
                        </p>

                    </div>

                </div>



                {{-- DEVELOPMENT & BUSINESS --}}

                <div class="col-md-4">

                    <div class="interest-card">

                        <div class="interest-icon">
                            <i class="bi bi-laptop"></i>
                        </div>

                        <h4>
                            Development & Business
                        </h4>

                        <p>
                            Web Development, Business Analysis, Power Platform,
                            application development, and quality assurance.
                        </p>

                    </div>

                </div>



                {{-- DATA & AI --}}

                <div class="col-md-4">
                <div class="interest-card">
                    <div class="interest-icon">
                         <i class="bi bi-robot"></i>
                    </div>
                        <h4>
                            Data & Artificial Intelligence
                        </h4>

                        <p>
                            Developing knowledge in Data Science, Business
                            Intelligence, Artificial Intelligence, and Machine Learning.
                        </p>

                    </div>

                </div>

            </div>

        </div>



        {{-- ================================
             TECHNOLOGIES
        ================================= --}}

        <div class="technology-section text-center">

            <div class="subtitle mb-2">
               {{-- Technical Skills --}}
            </div>

            <h3 class="mb-4">
                Technologies I Work With
            </h3>

            <div>

                <span class="tech-badge">PHP</span>
                <span class="tech-badge">Laravel</span>
                <span class="tech-badge">MySQL</span>
                <span class="tech-badge">JavaScript</span>
                <span class="tech-badge">Bootstrap</span>
                <span class="tech-badge">Vite</span>
                {{-- <span class="tech-badge">Power Platform</span>
                <span class="tech-badge">Power BI</span>
                <span class="tech-badge">Git</span>--}}

            </div>

        </div>


    </div>

</section>

@endsection