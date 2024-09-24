@extends('layouts.app')
@section('title','')
@section('main-content')

<!-- <section>
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators mb-2 mb-lg-4 mb-md-4 ">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="img/cinnamon.jpg" class="d-block slide-img p-0 w-100 object-fit-cover" style="height: 740px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center align-items-start h-100 z-2">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class="">
                        <a href="#" class="btn btn-danger fs-5 py-1 px-3 hoverbtn fw-medium mt-2">View Package </a>
                        <a href="#" class="btn btn-outline-danger mx-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium  mt-2">Custom Package </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="img/cinnamon1.jpg" class="d-block w-100 object-fit-cover" style="height: 740px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center align-items-start h-100 z-2">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class="">
                        <a href="#" class="btn btn-danger fs-5 py-1 px-3 hoverbtn fw-medium mt-2">View Package </a>
                        <a href="#" class="btn btn-outline-danger mx-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium  mt-2">Custom Package </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img src="img/cinnamon2.jpg" class="d-block w-100 object-fit-cover" style="height: 740px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center align-items-start h-100 z-2">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class="">
                        <a href="#" class="btn btn-danger fs-5 py-1 px-3 hoverbtn fw-medium mt-2">View Package </a>
                        <a href="#" class="btn btn-outline-danger mx-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium  mt-2">Custom Package </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->


<section>
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators mb-2 mb-lg-4 mb-md-4">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/cinnamon.jpg" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                
                <div class="carousel-caption position-absolute start-0 top-0 d-flex flex-column justify-content-center h-100 align-items-start px-5 container">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div>
                        <a href="#" class="btn btn-danger fs-5 py-1 px-3 hoverbtn fw-medium mt-2">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium mt-2">Custom Package</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/cinnamon1.jpg" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute start-0 top-0 d-flex flex-column justify-content-center h-100 align-items-start p-5">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div>
                        <a href="#" class="btn btn-danger fs-5 py-1 px-3 hoverbtn fw-medium mt-2">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium mt-2">Custom Package</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/cinnamon2.jpg" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute start-0 top-0 d-flex flex-column justify-content-center h-100 align-items-start p-5">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div>
                        <a href="#" class="btn btn-danger fs-5 py-1 px-3 hoverbtn fw-medium mt-2">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium mt-2">Custom Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
{{-- asset link end --}}