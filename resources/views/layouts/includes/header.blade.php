<!-- <li class="nav-item ms-5">
                        <a href="#" class="nav-link text-black fs-4"><i class="fa-solid fa-user"></i></a>
                    </li> -->


<!-- <header>
    <nav class=" p-0 navbar navbar-expand-lg bg-white">
        <div class=" container">
            <a class="navbar-brand" href="#"><img style=" height:56px;" src="{{ asset('img/Logo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-4 ">
                        <a href="#" class="nav-link text-dark active fs-4" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="#" class="nav-link text-dark fs-4">Travel Package</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="#" class="nav-link text-dark fs-4">About Us</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="#" class="nav-link text-dark fs-4">Booking dashboard</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a href="#" class="nav-link text-dark fs-4">Contact Us</a>
                    </li>


                </ul>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="#" class="nav-link text-black fs-4"><i class="fa-solid fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> -->

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
                <li class="nav-item">
                    <a class="nav-link fs-4  text-dark" href="{{ route('home') }} ">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4  text-dark" href="">Travel Package</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4  text-dark" href="">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4  text-dark" href="">Booking Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4  text-dark" href="">Contact Us</a>
                </li>
                <li class="nav-item d-lg-none">
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