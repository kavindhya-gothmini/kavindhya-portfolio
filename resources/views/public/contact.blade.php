@extends('layouts.public')

@section('content')

<section class="py-5"
    style="
        background: linear-gradient(
            135deg,
            #efeff1 0%,
            #dedfdf 50%,
            #cddcf3 100%
        );
        min-height: 100vh;
    ">

    <div class="container">

        <!-- Page Header -->
        <div class="text-center mb-5">

            <h1 class="fw-bold">Contact Me</h1>

            <p class="text-muted">
                Interested in working together? Feel free to get in touch.
            </p>

        </div>


        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
                </button>

            </div>
        @endif


        <!-- Validation Errors -->
        @if($errors->any())
            <div class="alert alert-danger" role="alert">

                <strong>Please correct the following errors:</strong>

                <ul class="mb-0 mt-2">

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif


        <div class="row g-4 justify-content-center">


            <!-- Contact Details -->
            <div class="col-lg-5">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4 p-lg-5">

                        <h3 class="fw-bold mb-4">
                            My Contact Details
                        </h3>


                        <p class="text-muted mb-4">
                            Feel free to contact me for software development
                            opportunities, technology projects, collaborations,
                            or professional discussions.
                        </p>


                        <!-- Email -->
                        <div class="d-flex align-items-start mb-4">

                            <div class="me-3">
                                <i class="bi bi-envelope-fill fs-4 text-primary"></i>
                            </div>

                            <div>

                                <h6 class="fw-bold mb-1">
                                    Email
                                </h6>

                                <a
                                    href="mailto:kavindhyagothmini13650@gmail.com"
                                    class="text-decoration-none text-muted">

                                    kavindhyagothmini13650@gmail.com

                                </a>

                            </div>

                        </div>


                        <!-- Phone -->
                        <div class="d-flex align-items-start mb-4">

                            <div class="me-3">
                                <i class="bi bi-telephone-fill fs-4 text-primary"></i>
                            </div>

                            <div>

                                <h6 class="fw-bold mb-1">
                                    Phone
                                </h6>

                                <a
                                    href="tel:+94764104905"
                                    class="text-decoration-none text-muted">

                                    +94 76 410 4905

                                </a>

                            </div>

                        </div>


                        <!-- Location -->
                        <div class="d-flex align-items-start mb-4">

                            <div class="me-3">
                                <i class="bi bi-geo-alt-fill fs-4 text-primary"></i>
                            </div>

                            <div>

                                <h6 class="fw-bold mb-1">
                                    Location
                                </h6>

                                <p class="text-muted mb-0">
                                    166/9, 3rd Lane, Milkasalwaththa,
                                    Bomugammana, Divulapitiya, Sri Lanka
                                </p>

                            </div>

                        </div>


                        <!-- LinkedIn -->
                        <div class="d-flex align-items-start mb-4">

                            <div class="me-3">
                                <i class="bi bi-linkedin fs-4 text-primary"></i>
                            </div>

                            <div>

                                <h6 class="fw-bold mb-1">
                                    LinkedIn
                                </h6>

                                <a
                                    href="https://www.linkedin.com/in/kavindhya-gothmini-thilakarathna"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-none text-muted">

                                    https://www.linkedin.com/in/kavindhya-gothmini-thilakarathna

                                </a>

                            </div>

                        </div>


                        {{-- GitHub
                        <div class="d-flex align-items-start">

                            <div class="me-3">
                                <i class="bi bi-github fs-4 text-primary"></i>
                            </div>

                            <div>

                                <h6 class="fw-bold mb-1">
                                    GitHub
                                </h6>

                                <a
                                    href="https://github.com/your-username"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-none text-muted">

                                    GitHub Profile

                                </a>

                            </div>

                        </div>
                        --}}


                    </div>

                </div>

            </div>


            <!-- Contact Form -->
            <div class="col-lg-7">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-4 p-lg-5">

                        <h3 class="fw-bold mb-4">
                            Send Me a Message
                        </h3>


                        <!-- Contact Form -->
                        <form
                            method="POST"
                            action="{{ route('contact.send') }}">

                            @csrf


                            <!-- Name -->
                            <div class="mb-3">

                                <label
                                    for="name"
                                    class="form-label fw-semibold">

                                    Your Name

                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    placeholder="Enter your name"
                                    value="{{ old('name') }}"
                                    required>

                            </div>


                            <!-- Email -->
                            <div class="mb-3">

                                <label
                                    for="email"
                                    class="form-label fw-semibold">

                                    Email Address

                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    value="{{ old('email') }}"
                                    required>

                            </div>


                            <!-- Subject -->
                            <div class="mb-3">

                                <label
                                    for="subject"
                                    class="form-label fw-semibold">

                                    Subject

                                </label>

                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    class="form-control"
                                    placeholder="Enter subject"
                                    value="{{ old('subject') }}"
                                    required>

                            </div>


                            <!-- Message -->
                            <div class="mb-4">

                                <label
                                    for="message"
                                    class="form-label fw-semibold">

                                    Message

                                </label>

                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-control"
                                    rows="6"
                                    placeholder="Write your message"
                                    required>{{ old('message') }}</textarea>

                            </div>


                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="btn btn-primary px-4">

                                <i class="bi bi-send-fill me-2"></i>

                                Send Message

                            </button>


                        </form>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>

@endsection