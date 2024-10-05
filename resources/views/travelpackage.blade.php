@extends('layouts.app')
@section('title','')
@section('main-content')


<header class=" position-relative w-100">
    <div class="header-container">
        <img src="{{ asset('img/Rectangle 19351.png') }}" alt="Tropical Header" class=" w-100 h-auto">
        <h1 class="product-title position-absolute text-white top-50 start-50 translate-middle">Custom Package</h1>
    </div>
</header>


<div class="container mt-5 pt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-7">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4 text-primary">Build Your Own Package</h1>

                    <div class="alert alert-danger border-danger-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        Fail to Submit!
                    </div>
                    <div class="alert alert-success border-success-subtle fade show py-1 fs-5" role="alert" id="submitAlert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        Successfully Send message!
                    </div>
                    <form id="tourForm" novalidate>
                        <div class="mb-4">
                            <label for="name" class="form-label fs-5">Name</label>
                            <input type="text" class="form-control fs-5 py-2 px-4 border-secondary plcname" id="name" placeholder="Name" required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label fs-5">Mail Address</label>
                            <input type="email" class="form-control fs-5 py-2 px-4 border-secondary" id="email" placeholder="Mail address">
                        </div>
                        <div class="mb-4">
                            <label for="whatsapp" class="form-label fs-5">Whatsapp Number</label>
                            <input type="tel" class="form-control fs-5 py-2 px-4 border-secondary" id="whatsapp" placeholder="Whatsapp number">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label fs-5">Phone Number</label>
                            <input type="tel" class="form-control fs-5 py-2 px-4 border-secondary" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="mb-4">
                            <label class="form-label fs-5">Date Range</label>
                            <input type="text" class="form-control mb-3 fs-5 py-2 px-4 border-secondary" placeholder="Start Date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            <input type="text" class="form-control fs-5 py-2 px-4 border-secondary" placeholder="End Date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                        </div>
                        <div class="mb-4">
                            <label for="persons" class="form-label fs-5">No of Person</label>
                            <input type="text" class="form-control fs-5 py-2 px-4 border-secondary" id="persons" value="2 Adults" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="vehicle" class="form-label fs-5">Vehicle</label>
                            <div class="position-relative">
                                <select class="form-select fs-5 py-2 px-4 border-secondary no-arrow" id="vehicle">
                                    <option selected>Car</option>
                                    <option>Bus</option>
                                    <option>Van</option>
                                    <option>Motorcycle</option>
                                </select>
                                <i class="fa-solid fa-caret-down position-absolute end-0 me-2 top-50 translate-middle fs-5" style="pointer-events: none;"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fs-5">Place</label>
                            <div class="border p-3 rounded border-secondary">
                                <div class="mb-2">
                                    <label for="district" class="form-label">District</label>
                                    <div class="position-relative">
                                        <select class="form-select fs-5 py-2 px-4 border-secondary no-arrow" id="district">
                                            <option selected>Jaffna</option>
                                            <option>Colombo</option>
                                            <option>Kandy</option>
                                            <option>Galle</option>
                                        </select>
                                        <i class="fa-solid fa-caret-down position-absolute end-0 me-2 top-50 translate-middle fs-5" style="pointer-events: none;"></i>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label mb-1 mt-2">Place</label>
                                    <div class="d-flex flex-wrap gap-4 gap-lg-5 gap-md-5">
                                        <div class="form-check ms-2 me-2">
                                            <input class="form-check-input fs-5 border-secondary" type="checkbox" id="place1" value="Nallur" >
                                            <label class="form-check-label fs-5 text-black" for="place1">Nallur</label>
                                        </div>
                                        <div class="form-check ms-2 me-2">
                                            <input class="form-check-input fs-5 border-secondary" type="checkbox" id="place2" value="Jaffna">
                                            <label class="form-check-label fs-5 text-black" for="place2">Jaffna</label>
                                        </div>
                                        <div class="form-check ms-2 me-2">
                                            <input class="form-check-input fs-5 border-secondary" type="checkbox" id="place3" value="Nallur">
                                            <label class="form-check-label fs-5 text-black" for="place3">Nallur</label>
                                        </div>
                                        <div class="form-check ms-2 me-2">
                                            <input class="form-check-input fs-5 border-secondary" type="checkbox" id="place4" value="Nallur">
                                            <label class="form-check-label fs-5 text-black" for="place4">Nallur</label>
                                        </div>
                                        <div class="form-check ms-2 me-2">
                                        <input class="form-check-input fs-5 border-secondary" type="checkbox" id="place5" value="Nallur">
                                            <label class="form-check-label fs-5 text-black" for="place5">Jaffna</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="#" class="text-decoration-none text-black fw-bold">+ Add destination</a>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label fs-5">Message</label>
                            <textarea class="form-control border-secondary fs-5" id="message" rows="3" placeholder="Your message" style="resize: none;"></textarea>
                        </div>
                        <div class="d-flex justify-content-center mt-4 mb-2">
                            <div class="col-md-4 col-lg-3 col-6">
                                <button type="submit" class="btn btn-danger fs-5 w-100 hoverbtn hoverbtnt">Build Package</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/travelpackage.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/travelpackage.js') }}"></script>
@endsection