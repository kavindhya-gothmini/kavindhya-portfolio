
<footer class="mt-5" style="
    background: linear-gradient(135deg, #111827 0%, #1f2937 55%, #243b5a 100%);
    color: #ffffff;
">

    <div class="container py-5">

        <div class="row g-5">

            {{-- PROFILE --}}
            <div class="col-lg-6 col-md-6">

                <h4 class="fw-bold mb-3">
                    Kavindhya Gothmini Thilakarathna
                </h4>

                <p class="mb-4" style="color: #cbd5e1; line-height: 1.8;">
                    Software Engineering Graduate,
                    Software Developer and Technology Enthusiast
                    passionate about software development,
                    web technologies, data and emerging technology.
                </p>

                {{-- SOCIAL LINKS --}}
                <div class="d-flex flex-wrap gap-2">

                    {{-- LINKEDIN --}}
                    <a href="https://www.linkedin.com/in/kavindhya-gothmini-thilakarathna"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="footer-social">

                        <i class="bi bi-linkedin"></i>
                        LinkedIn

                    </a>

                    {{-- EMAIL --}}
                    <a href="mailto:kavindhyagothmini13650@gmail.com"
                       class="footer-social">

                        <i class="bi bi-envelope"></i>
                        Email

                    </a>

                </div>

            </div>


            {{-- QUICK LINKS --}}
            <div class="col-lg-3 col-md-6">

                <h6 class="fw-bold text-uppercase mb-4 footer-heading">
                    Quick Links
                </h6>

                <ul class="list-unstyled footer-links">

                    <li>
                        <a href="{{ url('/') }}">
                            <i class="bi bi-chevron-right"></i>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/about') }}">
                            <i class="bi bi-chevron-right"></i>
                            About
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/skills') }}">
                            <i class="bi bi-chevron-right"></i>
                            Skills
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/projects') }}">
                            <i class="bi bi-chevron-right"></i>
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/experience') }}">
                            <i class="bi bi-chevron-right"></i>
                            Experience
                        </a>
                    </li>

                </ul>

            </div>


            {{-- PROFESSIONAL LINKS --}}
            <div class="col-lg-3 col-md-12">

                <h6 class="fw-bold text-uppercase mb-4 footer-heading">
                    Professional
                </h6>

                <ul class="list-unstyled footer-links">

                    <li>
                        <a href="{{ url('/education') }}">
                            <i class="bi bi-chevron-right"></i>
                            Education
                        </a>
                    </li>

                   {{-- <li>
                        <a href="{{ url('/certifications') }}">
                            <i class="bi bi-chevron-right"></i>
                            Certifications
                        </a>
                    </li>--}}

                    <li>
                        <a href="{{ url('/contact') }}">
                            <i class="bi bi-chevron-right"></i>
                            Contact Me
                        </a>
                    </li>

                </ul>

            </div>

        </div>


        {{-- DIVIDER --}}
        <hr class="my-5" style="border-color: rgba(255,255,255,0.15);">


        {{-- BOTTOM FOOTER --}}
        <div class="row align-items-center gy-3">

            <div class="col-md-6 text-center text-md-start">

                <small style="color: #94a3b8;">
                    © {{ date('Y') }}
                    <span class="text-white fw-semibold">
                        Kavindhya Gothmini Thilakarathna
                    </span>
                    . All Rights Reserved.
                </small>

            </div>

            <div class="col-md-6 text-center text-md-end">

                <small style="color: #94a3b8;">
                    Designed & Developed with
                    <span class="text-white fw-semibold">
                        Laravel
                    </span>
                </small>

            </div>

        </div>

    </div>


    {{-- FOOTER CSS --}}
    <style>

        .footer-heading {
            color: #ffffff;
            letter-spacing: 1px;
        }

        .footer-links li {
            margin-bottom: 13px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
        }

        .footer-links a i {
            font-size: 11px;
            margin-right: 8px;
            transition: transform 0.25s ease;
        }

        .footer-links a:hover {
            color: #ffffff;
            transform: translateX(4px);
        }

        .footer-links a:hover i {
            transform: translateX(3px);
        }

        .footer-social {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 16px;
            border: 1px solid rgba(255,255,255,0.18);
            border-radius: 8px;
            color: #e2e8f0;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.25s ease;
            background: rgba(255,255,255,0.04);
        }

        .footer-social:hover {
            color: #ffffff;
            background: rgba(255,255,255,0.10);
            border-color: rgba(255,255,255,0.35);
            transform: translateY(-2px);
        }

        .footer-social i {
            font-size: 17px;
        }

        @media (max-width: 767px) {

            footer {
                text-align: center;
            }

            .footer-social {
                justify-content: center;
            }

            .footer-links a {
                justify-content: center;
            }

        }

    </style>

</footer>

