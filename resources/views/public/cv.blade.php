
@extends('layouts.public')

@section('content')

<section
    class="py-5 cv-section"
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

        {{-- Page Heading --}}
        <div class="section-heading text-center mb-5">
{{--
            <span class="text-primary fw-semibold">
                CURRICULUM VITAE
            </span>

            <h1 class="fw-bold mt-2">
                My CV
            </h1>

            <p class="text-muted">
                View or download my latest professional curriculum vitae.
            </p>
--}}
        </div>


        @if($profile && $profile->cv_path)

            @php
                $cvUrl = asset('storage/' . $profile->cv_path);
            @endphp


            <div class="cv-container">

                {{-- CV Information Header --}}
                <div class="cv-header text-center mb-4">

                    <h3 class="fw-bold mb-2">
                        {{ $profile->full_name }}
                    </h3>

                    @if($profile->professional_title)
                        <p class="text-muted mb-0">
                            {{ $profile->professional_title }}
                        </p>
                    @endif

                </div>


                {{-- CV Action Buttons --}}
                <div class="cv-actions text-center mb-4">

                    {{-- View CV --}}
                    <a
                        href="{{ $cvUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-primary me-2"
                    >
                        <i class="bi bi-eye me-1"></i>
                        View CV
                    </a>


                    {{-- Download CV --}}
                    <a
                        href="{{ $cvUrl }}"
                        download
                        class="btn btn-outline-primary"
                    >
                        <i class="bi bi-download me-1"></i>
                        Download CV
                    </a>

                </div>


                {{-- CV Preview --}}
                <div class="cv-preview shadow-sm">

                    <iframe
                        src="{{ $cvUrl }}"
                        width="100%"
                        height="1000"
                        style="border: none;"
                        title="Kavindhya Gothmini Thilakarathna CV"
                    >
                    </iframe>

                    {{-- Fallback for browsers that do not display PDF --}}
                    <div class="cv-preview-fallback text-center p-4">
{{--
                        <p class="text-muted mb-3">
                            If the CV preview is not displayed,
                            please use one of the buttons below.
                        </p>

                        <a
                            href="{{ $cvUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-primary me-2"
                        >
                            <i class="bi bi-eye me-1"></i>
                            Open CV
                        </a>

                        <a
                            href="{{ $cvUrl }}"
                            download
                            class="btn btn-outline-primary"
                        >
                            <i class="bi bi-download me-1"></i>
                            Download CV
                        </a>
--}}
                    </div>

                </div>

            </div>


        @else

            {{-- CV Not Available --}}
            <div class="text-center py-5">

                <div class="card border-0 shadow-sm p-5">

                    <div class="mb-3">
                        <i class="bi bi-file-earmark-pdf fs-1 text-muted"></i>
                    </div>

                    <h3 class="fw-bold">
                        CV Currently Unavailable
                    </h3>

                    <p class="text-muted mb-0">
                        My latest CV will be available here soon.
                    </p>

                </div>

            </div>

        @endif

    </div>

</section>

@endsection
