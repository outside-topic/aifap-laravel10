<!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/">AIFAP<span>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
            <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('certification') ? 'active' : '' }}" href="/certification">Certifications</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('membership') ? 'active' : '' }}" href="/membership">Membership</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('corporate-trainning') ? 'active' : '' }}" href="/corporate-trainning">Corporate Training</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('partnership') ? 'active' : '' }}" href="/partnership">Partnerships</a></li>
            <li class="nav-item ms-lg-3">
                <a class="btn btn-primary-custom" href="/contact">Contact Us</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>