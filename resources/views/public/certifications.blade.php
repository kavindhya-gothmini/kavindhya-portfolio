@extends('layouts.public')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h1 class="fw-bold">Certifications</h1>

            <p class="text-muted">
                Professional certifications and technology-related learning.
            </p>

        </div>

        <div class="row g-4">

            @forelse($certifications as $certification)

                <div class="col-md-6 col-lg-4">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body p-4">

                            <div class="mb-3">

                                <span class="badge bg-primary">
                                    Certification
                                </span>

                            </div>

                            <h4 class="fw-bold">
                                {{ $certification->name }}
                            </h4>

                            <p class="text-primary fw-semibold">

                                {{ $certification->issuer }}

                            </p>

                            @if($certification->issue_date)

                                <p class="text-muted">

                                    Issued:
                                    {{ \Carbon\Carbon::parse($certification->issue_date)->format('F Y') }}

                                </p>

                            @endif

                            @if($certification->credential_id)

                                <p>

                                    <strong>Credential ID:</strong><br>

                                    {{ $certification->credential_id }}

                                </p>

                            @endif

                            @if($certification->credential_url)

                                <a href="{{ $certification->credential_url }}"
                                   target="_blank"
                                   class="btn btn-outline-primary btn-sm">

                                    Verify Credential

                                </a>

                            @endif

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">

                    <p class="text-muted">
                        No certifications available.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection