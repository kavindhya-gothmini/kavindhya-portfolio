@extends('layouts.public')

@section('content')

<section id="experience" class="experience-section py-5">

    <div class="container">

        {{-- PAGE HEADER --}}
        <div class="text-center mb-5">

            <h1 class="fw-bold">
                Professional Experience
            </h1>

            <p class="text-muted">
                Highlighting my hands-on experience, core competencies,
                and professional development journey.
            </p>

        </div>


        {{-- EXPERIENCE --}}
        @forelse($experiences as $experience)

            <div class="card border-0 shadow-sm mb-4 experience-card">

                <div class="card-body p-4">

                    <div class="row">

                        {{-- DATE + COMPANY LOGO --}}
                        <div class="col-md-3">

                            @if($experience->company_logo)

                                <div class="company-logo-wrapper mb-3">

                                    <img
                                        src="{{ asset('storage/' . $experience->company_logo) }}"
                                        alt="{{ $experience->company }} logo"
                                        class="company-logo"
                                    >

                                </div>

                            @endif

                            <p class="text-primary fw-bold">

                                {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }}

                                -

                                @if($experience->is_current)

                                    Present

                                @elseif($experience->end_date)

                                    {{ \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}

                                @else

                                    Present

                                @endif

                            </p>

                        </div>


                        {{-- EXPERIENCE CONTENT --}}
                        <div class="col-md-9">

                            <h3 class="fw-bold">
                                {{ $experience->job_title }}
                            </h3>

                            <h5 class="text-muted">
                                {{ $experience->company }}
                            </h5>


                            @if($experience->location)

                                <p class="text-muted">
                                    <i class="bi bi-geo-alt"></i>
                                    {{ $experience->location }}
                                </p>

                            @endif


                            @if($experience->summary)

                                <p>
                                    {{ $experience->summary }}
                                </p>

                            @endif


                            @if($experience->responsibilities)

                                <h6 class="fw-bold mt-4">
                                    Responsibilities
                                </h6>

                                @php
                                    $responsibilities = json_decode(
                                        $experience->responsibilities,
                                        true
                                    );
                                @endphp

                                @if(is_array($responsibilities))

                                    <ul>

                                        @foreach($responsibilities as $responsibility)

                                            <li class="mb-2">
                                                {{ $responsibility }}
                                            </li>

                                        @endforeach

                                    </ul>

                                @endif

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <p class="text-center text-muted">
                No experience information available.
            </p>

        @endforelse

    </div>

</section>


<style>

/* =========================================
   EXPERIENCE PAGE BACKGROUND
========================================= */

.experience-section {
    background: linear-gradient(
        135deg,
        #efeff1 0%,
        #dedfdf 50%,
        #cddcf3 100%
    );

    min-height: 100vh;
}


/* =========================================
   EXPERIENCE CARD
========================================= */

.experience-card {
    border-radius: 16px;
    background: #ffffff;
    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

.experience-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(30, 60, 100, 0.10) !important;
}


/* =========================================
   COMPANY LOGO
========================================= */

.company-logo-wrapper {
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    border: 1px solid #e3e8f0;
    border-radius: 14px;
    padding: 8px;
    overflow: hidden;
}

.company-logo {
    display: block;
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 768px) {

    .experience-card {
        border-radius: 14px;
    }

    .company-logo-wrapper {
        width: 85px;
        height: 85px;
    }

}

</style>

@endsection