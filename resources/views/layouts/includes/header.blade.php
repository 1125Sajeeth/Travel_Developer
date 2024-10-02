
<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img style=" height:56px;" src="{{ asset('img/Logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-dark" href="{{ route('home') }} ">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-dark" href="{{ route('travelpackage') }}">Travel Package</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-dark" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-dark" href="">Booking Dashboard</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-4  text-dark" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item d-lg-none mx-2">
                    <a class="nav-link fs-4" href="#">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block ms-auto">
            <li class="nav-item list-unstyled">
                <a href="#" class="nav-link text-black fs-4"><i class="fa-solid fa-user"></i></a>
            </li>
        </div>
    </div>
</nav>