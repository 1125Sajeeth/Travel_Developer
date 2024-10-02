@extends('layouts.app')
@section('title','')
@section('main-content')


<div class="container">
    <div class="row mt-5">
        <div class="col">
            <a href="#" class="text-decoration-none text-danger fs-5">
                <i class="fa-solid fa-house home-icon"></i>
            </a>
        </div>
    </div>
    <div class="container login-container mt-5">
        <div class="row d-flex  justify-content-center">
            <div class="col-lg-6 px-0 d-lg-flex d-md-none d-none pe-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
                    <div class="carousel-indicators mb-2 mb-lg-4 mb-md-4">
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active bg-light" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2" class="bg-light"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3" class="bg-light"></button>
                    </div>
                    <div class="carousel-inner rounded-4 h-100">
                        <div class="carousel-item active position-relative h-100">
                            <img src="img/cinnamon.jpg" class="d-block w-100 h-100 object-fit-cover" alt="">
                            <div class="carousel-caption position-absolute d-flex flex-column justify-content-end h-100 align-items-center custom-caption-alignment">
                                <p class="text-white fw-bold fs-5">Explore the world's most stunning landscapes and hidden gems – your journey begins here.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="img/cinnamon1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="">
                            <div class="carousel-caption position-absolute d-flex flex-column justify-content-end h-100 align-items-center custom-caption-alignment">
                                <p class="text-white fw-bold fs-5">Explore the world's most stunning landscapes and hidden gems – your journey begins here.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="img/cinnamon2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="">
                            <div class="carousel-caption position-absolute d-flex flex-column justify-content-end h-100 align-items-center custom-caption-alignment">
                                <p class="text-white fw-bold fs-5">Explore the world's most stunning landscapes and hidden gems – your journey begins here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 login-form shadow rounded-4 d-flex flex-column px-4">
                <h1 class="text-center mt-5 fw-bold">Login</h1>

                <div class="alert alert-success border-success-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    Successfully Login!
                </div>

                <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    Failed to login.
                </div>

                <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    The name field format is invalid.
                </div>

                <form class="flex-grow-1 d-flex flex-column" id="tourForm" novalidate>
                    <div class="mb-3 mt-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control plcname border-secondary" id="email" placeholder="michael.joe@xmail.com" required>
                        <div class="invalid-feedback">
                            Please provide your name.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Enter Your Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control border-end-0 border-secondary" id="password" name="password" placeholder="*******">
                            <span class="input-group-text bg-transparent border-start-0 border-secondary">
                                <i class="fa-solid fa-eye" role="button"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3 text-end">
                        <a href="#" class="">Forgot Your Password</a>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-center mt-4 mb-2">
                            <div class="col-md-4 col-lg-2 col-6">
                                <button type="submit" class="btn btn-danger fs-5 w-100 login-button">Login</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4 mb-3">
                            <div class="col-md-8 col-lg-4 col-8">
                                <button type="button" class="btn bg-secondary-subtle d-flex justify-content-center align-items-center rounded py-1 fs-5 pe-5 ps-3 w-100" id="loadingButton">
                                    <span class="loading-spinner fw-bold me-2"></span>
                                    Loading....
                                </button>
                            </div>
                        </div>
                        <p class="text-center mt-3">
                            Do not have an account? <a href="#" class="">create a new one.</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    (function() {
        'use strict'
        var form = document.getElementById('tourForm');
        var nameInput = document.querySelector('.plcname');

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                if (!nameInput.checkValidity()) {
                    nameInput.classList.add('error');
                } else {
                    nameInput.classList.remove('error');
                }
            }
            form.classList.add('was-validated');
        }, false);
    })();

</script>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endsection