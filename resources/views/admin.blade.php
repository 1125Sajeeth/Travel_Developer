@extends('layouts.app')
@section('title','')
@section('main-content')
<!-------------------------------------- header ------------------------------>
<nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0px 10px 15px -5px #00000040;">
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
                    <a class="nav-link fs-5  text-dark" href="#">Admin/Agent Management</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5  text-dark" href="#">Booking Management</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5  text-dark" href="#">Package</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fs-5  text-dark" href="#">Slider</a>
                </li>
                <li class="nav-item d-lg-none mx-2">
                    <div class="d-flex">
                        <a href="#" class="btn d-flex justify-content-center fs-3 align-items-center rounded-circle border-0 shadow">
                            <i class="fas fa-home text-danger"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block ms-auto">

            <a href="#" class="btn d-flex fs-3 justify-content-center align-items-center rounded-circle border-0 shadow p-2">
                <i class="fas fa-home text-danger"></i>
            </a>

        </div>
    </div>
</nav>
<!-------------------------------------- header ------------------------------>


<div class="container mt-5">

    <div class="mb-4">

        <div>
            <a href="#" class="text-decoration-none text-black">Home</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-2"></div>
            <div class="col-lg-4 col-md-6 px-lg-5 px-md-5">
            </div>
            <div class="col-lg-4 col-md-4 text-end d-flex justify-content-end align-items-center">
                <!-- <button class="btn btn-danger"> <span class=" fw-bold me-1">+</span> Create an Account</button> -->
                <button type="button" class="btn btn-danger d-flex  rounded py-1 fs-5 " id="loadingButton">
                    <span class="loading-spinner fw-bold me-2"></span>
                    Loading...
                </button>
            </div>
        </div>


    </div>



    <div class="table-responsive mx-5 row justify-content-center">
        <div class="col-lg-10 col-lg-12 col-12">
            <table class="table table-borderless align-middle mx-auto">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">
                            <h5>Name</h5>
                        </th>
                        <th scope="col">
                            <h5>Mail</h5>
                        </th>
                        <th scope="col">
                            <h5>Phone No</h5>
                        </th>
                        <th scope="col">
                            <h5>User role</h5>
                        </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    <tr class=" border-bottom">
                        <th scope="row" class=" py-4">1</th>
                        <div class="">
                            <td>John Johnnnnaaa</td>
                            <td>john@gmail.com</td>
                            <td>XX XXXX XXX</td>
                            <td>
                                <div class="position-relative col-lg-7 col-md-12 col-12">
                                    <select class="form-select border-secondary no-arrow" required>
                                        <option selected>Admin</option>
                                        <option value="1">User</option>
                                        <option value="2">Moderator</option>
                                    </select>
                                    <i class="fa-solid fa-caret-down position-absolute end-0 me-2 top-50 translate-middle fs-5" style="pointer-events: none;"></i>
                                </div>
                            </td>
                        </div>
                        <td>
                            <button class=" border-0 bg-transparent delete-btn" data-id="1" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <img src="{{ asset('img/delete.png') }}" alt="Trash Icon" width="20" height="20">
                            </button>
                        </td>
                    </tr>

                    <tr class=" border-bottom">
                        <th scope="row" class=" py-4">2</th>
                        <td>Jane Doe</td>
                        <td>jane.doe@example.com</td>
                        <td>YY YYYY YYY</td>
                        <td>
                            <div class="position-relative col-lg-7 col-md-12 col-12">
                                <select class="form-select border-secondary no-arrow" required>
                                    <option selected>Admin</option>
                                    <option value="1">User</option>
                                    <option value="2">Moderator</option>
                                </select>
                                <i class="fa-solid fa-caret-down position-absolute end-0 me-2 top-50 translate-middle fs-5" style="pointer-events: none;"></i>
                            </div>
                        </td>
                        <td>
                            <button class="border-0 bg-transparent delete-btn" data-id="2" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <img src="{{ asset('img/delete.png') }}" alt="Trash Icon" width="20" height="20">
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <nav aria-label="Page navigation" class=" mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link text-black fs-6 p-3 border-black" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link p-3 text-black fs-6 border-black" href="#">1</a></li>
            <li class="page-item"><a class="page-link p-3 text-black fs-6 border-black" href="#">2</a></li>
            <li class="page-item"><a class="page-link p-3 text-black fs-6 border-black" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link text-black p-3 fs-6 border-black" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>




<div class="container mt-5">

    <div class="mb-2">
        <div>
            <nav class="breadcrumb">
                <a href="#" class="text-decoration-none text-black">Admin</a>
                <a href="#" class="text-decoration-none text-black">/agent management</a>
            </nav>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-6 px-lg-5 px-md-5">
                <div class="input-group mb-3">
                    <input type="search" class="form-control border-secondary rounded" type="search" placeholder="Search here" aria-label="Search">
                    <button class="btn btn-outline-secondary text-dark ms-3 px-3 rounded fw-bold hoverbtn" type="button">Search</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 text-end">
                <button class="btn btn-danger"> <span class=" fw-bold me-1">+</span> Create an Account</button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center my-0">
        <div class="col-12 text-center">
            <img src="{{ asset('img/search.png') }}" alt="No products icon" class="img-fluid mb-5 mt-4">
            <h5 class="text-muted">No products were found matching your selection.</h5>
        </div>
    </div>

</div>



<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Alert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" id="confirmDelete">confirm</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-------------------------------- section2 ------------------------------------>

<style>
    .form-control.is-invalid,
    .was-validated .form-control:invalid {
        background-color: #F22E2E3D;
        border-color: #8E0E0E !important;
        background-image: none !important;
    }

    .invalid-feedback {
        color: #8E0E0E;
    }

    .form-control:valid {
        background-image: none !important;
    }

    .plcname.error::placeholder {
        color: #8E0E0E;
    }

    .no-arrow {
        appearance: none;
        background: none;
    }
</style>

<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent p-0 mb-4">
            <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-none">Home</a></li>
            <span class="mx-1">&gt;</span>
            <li class="breadcrumb-item active text-muted" aria-current="page">Create Account</li>
        </ol>
    </nav>

    <h2 class="mb-4 text-center text-primary text-shadow">Create Account</h2>

    <div class=" row justify-content-center">
        <div class=" col-lg-8">
            <div class="alert alert-success border-success-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                <i class="fas fa-exclamation-circle me-2"></i>
                Successfully Send message!
            </div>
        </div>
    </div>
    <div class=" row justify-content-center">
        <div class=" col-lg-8">
            <div class="form-container mx-auto mb-4 p-4 shadow rounded bg-white">
                <form id="tourForm" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" id="firstName" class="form-control border-secondary plcname" placeholder="First name" required>
                            <div class="invalid-feedback">Please provide a valid first name.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" id="lastName" class="form-control border-secondary" placeholder="Last name" required>
                            <div class="invalid-feedback">Please provide a valid last name.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control border-secondary" placeholder="Email" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" id="phoneNumber" class="form-control border-secondary" placeholder="Phone number" required>
                            <div class="invalid-feedback">Please provide a valid phone number.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control border-secondary" placeholder="Password" required>
                            <div class="invalid-feedback">Please provide a password.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" id="confirmPassword" class="form-control border-secondary" placeholder="Confirm Password" required>
                            <div class="invalid-feedback">Passwords do not match.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="role" class="form-label">Role</label>
                            <div class="position-relative">
                                <select id="role" class="form-select border-secondary no-arrow" required>
                                    <option selected disabled>Select Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                                <i class="fa-solid fa-caret-down position-absolute end-0 me-2 top-50 translate-middle fs-5" style="pointer-events: none;"></i>
                                <div class="invalid-feedback">Please select a role.</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-3 p-2 rounded bg-light" style="width: fit-content;">
                        <div class="d-flex align-items-center justify-content-center text-center">
                            <input type="checkbox" class="form-check-input border-secondary ms-2 me-2" id="notRobot">
                            <label class="form-check-label text-black" for="notRobot">I'm not a robot</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger">Create</button>
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


<!-------------------------------------- footer ----------------------------------------->
<footer>
    <div class="bg-white text-center text-danger py-3  fs-6 foot-main" style="box-shadow: 0px -10px 10px -5px rgba(0, 0, 0, 0.15);">Web Developed by <a href="" class="text-danger fs-6">Apexx Private limited</a></div>
</footer>
<!-------------------------------------- footer ----------------------------------------->


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/admin.js') }}"></script>
@endsection