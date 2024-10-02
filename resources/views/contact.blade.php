@extends('layouts.app')
@section('title','')
@section('main-content')





<!------------------------------ section 1 ------------------------------------->

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
                <h1 class="text-center mt-3 fw-bold text-primary">Register</h1>
                <div class="alert alert-success border-success-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    Successfully Register!
                </div>

                <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    The name field format is invalid.
                </div>

                <form class="flex-grow-1 d-lex flex-column" id="tourForm" novalidate>
                    <div class="row mb-3 mt-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control plcname border-secondary" id="firstName" placeholder="michael joe" required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control plcname border-secondary" id="lastName" placeholder="michael joe" required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control border-secondary" id="email" placeholder="michael.joe@xmail.com">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control border-secondary" id="phoneNumber" placeholder="**********">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-end-0 border-secondary" id="password" placeholder="******">
                                <span class="input-group-text border-start-0 bg-transparent border-secondary">
                                    <i class="fa-solid fa-eye" role="button"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-end-0 border-secondary" id="confirmPassword" placeholder="******">
                                <span class="input-group-text border-start-0 bg-transparent border-secondary">
                                    <i class="fa-solid fa-eye" role="button"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12 d-flex align-items-center">
                            <input type="checkbox" class="form-check-input fs-5 border-black me-2" id="termsCheck" role="button">
                            <label class="form-check-label text-black pt-lg-1 pt-md-1 pt-0" for="termsCheck">
                                I have read and agreed to the Terms of Service and Privacy Policy
                            </label>
                        </div>
                    </div>


                    <div class="mt-1">
                        <div class="d-flex justify-content-center mt-4 mb-2">
                            <button type="submit" class="btn btn-danger fs-5 px-4 py-2 accontbtn">Create Account</button>
                        </div>
                        <p class="text-center mt-3">
                            Already Have An Account, <a href="#" class="text-primary">Login</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<!------------------------------ section 2 ------------------------------------->

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col ms-sm-0 ms-md-4 ms-lg-0">
            <a href="#" class="text-decoration-none text-dark fs-3">
                <i class="fa-solid fa-house home-icon"></i>
            </a>
        </div>
    </div>

    <div>
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-md-12 col-lg-7">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <div class="">
                            <div class="d-flex justify-content-center mt-0 mb-2">
                                <div class="col-md-8 col-lg-7 col-12">
                                    <h1 class="display-5 fw-bold mt-0 mb-4 text-center">Verify Code</h1>
                                    <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5 " role="alert" id="submitAlert">
                                        <i class="fas fa-exclamation-circle me-4"></i>
                                        The code field format is invalid.
                                    </div>
                                    <div class="alert alert-success border-success-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                                        <i class="fas fa-exclamation-circle me-4"></i>
                                        Successfully verified!
                                    </div>
                                    <p class="text-muted mb-2">An authentication code has been sent to your email.</p>
                                    <form id="tourForm" novalidate class="text-center">
                                        <div>
                                            <div class="d-flex justify-content-center mt-4">
                                                <div class="">
                                                    <input type="text" class="form-control verification-input text-center border-secondary fs-5 plcname px-0" style="letter-spacing: 8px;" maxlength="8" placeholder="******" required>
                                                    <div class="invalid-feedback text-start">
                                                        Please provide your code.
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-muted small mb-3">
                                                Code Expires in: <span class="text-success">01:30</span>
                                            </p>
                                        </div>

                                        <div class=" text-center text-danger fw-bold">
                                            <p>Code Expired!</p>
                                        </div>

                                        <div class="d-flex justify-content-center mt-4 mb-3">
                                            <button type="submit" class="btn btn-dark fs-5 px-5 py-2"> Verify Code</button>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4 mb-3">
                                            <button type="submit" class="btn btn-dark fs-5 px-5 py-2"> Resend Code</button>
                                        </div>
                                        <p class="mb-0">
                                            Haven't got the email yet?
                                            <a href="#" class="text-decoration-underline text-dark">Resend email</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------ section 3 ------------------------------------->

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col ms-sm-0 ms-md-4 ms-lg-0">
            <a href="#" class="text-decoration-none text-dark fs-3">
                <i class="fa-solid fa-house home-icon"></i>
            </a>
        </div>
    </div>

    <div>
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-md-12 col-lg-7">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <div class="">
                            <div class="d-flex justify-content-center mt-0 mb-2">
                                <div class="col-md-8 col-lg-10 col-12">
                                    <h1 class="display-6 fw-bold mt-0 mb-4 text-center">Forgot your password?</h1>
                                    <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5 " role="alert" id="submitAlert">
                                        <i class="fas fa-exclamation-circle me-4"></i>
                                        The code field format is invalid.
                                    </div>
                                    <p class="text-muted mb-2">Don’t worry, happens to all of us. Enter your email below to recover your password</p>
                                    <form id="tourForm" novalidate class="">
                                        <div>
                                            <div class=" row d-flex justify-content-center mt-4">
                                                <div class="col-md-7">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control border-secondary" id="email" placeholder="michael.joe@xmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4 mb-3">
                                            <button type="submit" class="btn btn-dark fs-5 px-5 py-1 text-center"> Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------ section 4 ------------------------------------->

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col ms-sm-0 ms-md-4 ms-lg-0">
            <a href="#" class="text-decoration-none text-dark fs-3">
                <i class="fa-solid fa-house home-icon"></i>
            </a>
        </div>
    </div>

    <div>
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-md-12 col-lg-7">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <div class="">
                            <div class="d-flex justify-content-center mt-0 mb-2">
                                <div class="col-md-8 col-lg-8 col-12">
                                    <h1 class="display-5 fw-bold mt-0 mb-4 text-center">Reset Password</h1>
                                    <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5 " role="alert" id="submitAlert">
                                        <i class="fas fa-exclamation-circle me-4"></i>
                                        The code field format is invalid.
                                    </div>
                                    <div class="alert alert-success border-success-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                                        <i class="fas fa-exclamation-circle me-4"></i>
                                        Successfully verified!
                                    </div>
                                    <p class="text-muted mb-2">Your previous password has been reseted. Please set a new password for your account.</p>
                                    <form id="tourForm" novalidate class="">
                                        <div>
                                            <div class=" row d-flex justify-content-center">
                                                <div class="col-md-7">
                                                    <label for="password" class="form-label">Create Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control border-end-0 border-secondary" id="create_password" placeholder="******">
                                                        <span class="input-group-text border-start-0 bg-transparent border-secondary">
                                                            <i class="fa-solid fa-eye" role="button"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row d-flex justify-content-center mt-3">
                                                <div class="col-md-7">
                                                    <label for="password" class="form-label">Re-Enter Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control border-end-0 border-secondary" id="reenter_password" placeholder="******">
                                                        <span class="input-group-text border-start-0 bg-transparent border-secondary">
                                                            <i class="fa-solid fa-eye" role="button"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4 mb-3">
                                            <button type="submit" class="btn btn-dark fs-5 px-3 py-2"> Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endsection