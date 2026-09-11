<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">

    <div class="container">

        {{-- Logo / Name --}}
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Kavindhya Gothmini 
        </a>


        {{-- Mobile Menu Button --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        {{-- Navigation --}}
        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>
                </li>


                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}"
                    >
                        About
                    </a>
                </li>


                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}"
                        href="{{ route('skills') }}"
                    >
                        Skills
                    </a>
                </li>


                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"
                        href="{{ route('projects') }}"
                    >
                        Projects
                    </a>
                </li>


                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}"
                        href="{{ route('experience') }}"
                    >
                        Experience
                    </a>
                </li>


                {{-- Education --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('education') ? 'active' : '' }}"
                        href="{{ route('education') }}"
                    >
                        Education
                    </a>
                </li>


                {{-- Certifications --}}
               {{-- <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('certifications') ? 'active' : '' }}"
                        href="{{ route('certifications') }}"
                    >
                        Certifications
                    </a>
                </li>


                --}}


                {{-- Contact --}}
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}"
                    >
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cv') }}">
                        Download CV
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>