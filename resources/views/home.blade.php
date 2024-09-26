@extends('layouts.app')
@section('title','')
@section('main-content')


<section>
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators mb-2 mb-lg-4 mb-md-4">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="img/cinnamon.jpg" class="d-block slide-img p-0 w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center h-100 align-items-start custom-caption-alignment start-0 top-0" style="padding-left: 5%;">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-danger py-1 px-3 me-2 hoverbtn fw-medium mt-2 text-nowrap justify-content-center align-items-center d-flex fs-5">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-3 mx-md-4 mx-lg-4 text-white fs-5 py-1 px-3 fw-medium mt-2 text-nowrap">Custom Package</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cinnamon1.jpg" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center h-100 align-items-start custom-caption-alignment start-0 top-0" style="padding-left: 5%;">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-danger py-1 px-3 me-2 hoverbtn fw-medium mt-2 text-nowrap justify-content-center align-items-center d-flex fs-5">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-3 mx-md-4 mx-lg-4 text-white fs-5 py-1 px-3 fw-medium mt-2 text-nowrap">Custom Package</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/cinnamon2.jpg" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center h-100 align-items-start custom-caption-alignment start-0 top-0" style="padding-left: 5%;">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-danger py-1 px-3 me-2 hoverbtn fw-medium mt-2 text-nowrap justify-content-center align-items-center d-flex fs-5">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-3 mx-md-4 mx-lg-4 text-white fs-5 py-1 px-3 fw-medium mt-2 text-nowrap">Custom Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!------------------------------- section2 ---------------------------------------->


    <section class="bg-light">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 col-lg-6 pe-lg-5 pe-md-3 pe-auto">
                    <div class="mb-2 fs-4">Our Story</div>
                    <h1 class="mb-4 text-primary">About Us</h1>
                    <p style="text-align: justify;">
                        At Trezzert, we are dedicated to providing exceptional travel experiences across Sri Lanka. Specializing in customizable tour packages, we offer everything from cultural explorations to beach getaways, wildlife adventures, and more. Our mission is to make your journey seamless, offering accommodation, meals, and transportation tailored to your preferences. With a focus on safety and customer satisfaction, we travel with you throughout your trip, resolving any issues along the way. Whether you choose a pre-designed package or create your own, Trezzert is here to deliver a hassle-free, unforgettable Sri Lankan adventure.
                    </p>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                            <img class="rounded-shape1 object-fit-cover img-fluid pb-lg-5 pb-md-0 pb-3 mb-lg-5 mb-md-0 mb-0 " src="img/Jaffna.png" alt="Sri Lanka Travel Image 1" style=" border-radius: 0 25% 0 25%;">
                        </div>
                        <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                            <img class="rounded-shape2 object-fit-cover img-fluid pt-lg-5 pt-md-0 pt-3 mt-lg-5 mt-md-0 mt-0" src="img/Jaffna.png" alt="Sri Lanka Travel Image 2" style="border-radius: 25% 0 25% 0; ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!------------------------------- section3 ---------------------------------------->
<section class="bg-light">
    <div class="container pt-3 pb-5">
        <div class="">
            <h5 class="text-center mb-2">Our Packages</h5>
            <h1 class="text-center fw-bold mb-2">Fall into travel</h1>
            <div class="text-end mb-4">
                <a href="#" class=" btn btn-outline-danger fs-5 fw-bold hoverbtn2 text-danger">See All</a>
            </div>
            <p class="mb-2 fs-5 text-secondary">Discover customized travel packages designed for your dream journey, combining adventure, comfort, and the best prices for a hassle-free experience.</p>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100 overflow-hidden rounded-4">
                    <img src="img/Rectangle 19377.png" class="card-img-top object-fit-cover pt-3 px-2 pb-0" alt="Travel group">
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2 bg-danger px-2 py-2">
                            <span class=" fw-bold text-white"><i class="bi bi-currency-dollar"></i> Rs.XXXXX</span>
                            <span class="text-white"><i class="bi bi-people"></i> 5 People</span>
                        </div>
                        <h5 class="card-title">Package Name Package Name</h5>
                        <p class="card-text fw-bold text-primary mb-1 fs-5">Jaffna | Trinco | Batti</p>
                        <p class="card-text text-secondary">Qui Tempore Voluptate Qui Quia Commodi Commodi Rem Praesentium Alias Et.</p>
                        <div class=" text-center">
                            <a href="#" class="btn btn-danger hoverbtn fs-5">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 overflow-hidden rounded-4">
                    <img src="img/Rectangle 19377.png" class="card-img-top object-fit-cover pt-3 px-2 pb-0" alt="Travel group">
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2 bg-danger px-2 py-2">
                            <span class=" fw-bold text-white"><i class="bi bi-currency-dollar"></i> Rs.XXXXX</span>
                            <span class="text-white"><i class="bi bi-people"></i> 5 People</span>
                        </div>
                        <h5 class="card-title">Package Name Package Name</h5>
                        <p class="card-text fw-bold text-primary mb-1 fs-5">Jaffna | Trinco | Batti</p>
                        <p class="card-text text-secondary">Qui Tempore Voluptate Qui Quia Commodi Commodi Rem Praesentium Alias Et.</p>
                        <div class=" text-center">
                            <a href="#" class="btn btn-danger hoverbtn fs-5">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 overflow-hidden rounded-4">
                    <img src="img/Rectangle 19377.png" class="card-img-top object-fit-cover pt-3 px-2 pb-0" alt="Travel group">
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2 bg-danger px-2 py-2">
                            <span class=" fw-bold text-white"><i class="bi bi-currency-dollar"></i> Rs.XXXXX</span>
                            <span class="text-white"><i class="bi bi-people"></i> 5 People</span>
                        </div>
                        <h5 class="card-title">Package Name Package Name</h5>
                        <p class="card-text fw-bold text-primary mb-1 fs-5">Jaffna | Trinco | Batti</p>
                        <p class="card-text text-secondary">Qui Tempore Voluptate Qui Quia Commodi Commodi Rem Praesentium Alias Et.</p>
                        <div class=" text-center">
                            <a href="#" class="btn btn-danger hoverbtn fs-5">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 overflow-hidden rounded-4">
                    <img src="img/Rectangle 19377.png" class="card-img-top object-fit-cover pt-3 px-2 pb-0" alt="Travel group">
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2 bg-danger px-2 py-2">
                            <span class=" fw-bold text-white"><i class="bi bi-currency-dollar"></i> Rs.XXXXX</span>
                            <span class="text-white"><i class="bi bi-people"></i> 5 People</span>
                        </div>
                        <h5 class="card-title">Package Name Package Name</h5>
                        <p class="card-text fw-bold text-primary mb-1 fs-5">Jaffna | Trinco | Batti</p>
                        <p class="card-text text-secondary">Qui Tempore Voluptate Qui Quia Commodi Commodi Rem Praesentium Alias Et.</p>
                        <div class=" text-center">
                            <a href="#" class="btn hoverbtn btn-danger fs-5">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<!------------------------------- section4 ---------------------------------------->
<section class=" mt-5">
    <div class="bg-img position-relative text-center pt-5">
        <div class=" container">
            <div class=" text-center">
                <h1 class="text-white display-3 fw-bold">Why choose Trezzert?</h1>
                <p class="text-white fs-5 mt-3">Our services have been trusted by world travelers.</p>
            </div>
            <div class=" row justify-content-center z-1 ">
                <div class="col-md-5 mt-3 mb-4">
                    <div class="bg-white rounded-2 px-5 py-2 mb-3 text-center">
                        <h4 class=" fw-bold">Customizable Packages</h4>
                        <p class=" fs-5">Tailor your travel experience with flexible itineraries, accommodations, and activities that suit your preferences.</p>
                    </div>
                    <div class="bg-white rounded-2 px-5 py-2 mb-3 text-center">
                        <h4 class=" fw-bold">Safe & Reliable Travel</h4>
                        <p class=" fs-5">Enjoy secure transportation, handpicked accommodations, and expert guidance throughout your journey.</p>
                    </div>
                    <div class="bg-white rounded-2 px-5 py-2 mb-4 text-center">
                        <h4 class=" fw-bold">Comprehensive Support</h4>
                        <p class=" fs-5">We offer 24/7 assistance, ensuring a seamless, worry-free trip from start to finish.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------- section5 ---------------------------------------->

<div class="container mt-5">
    <h5 class="text-center mb-2">Gallery</h5>
    <h2 class="text-center mb-4 fw-bold text-primary">Unforgettable moment</h2>
    <div class="row g-3">
        <div class="col-md-6 d-flex">
            <div class="position-relative w-100 h-100">
                <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 h-100 object-fit-cover">
                <div class="position-absolute bottom-0 start-0 p-3 text-white">
                    <h4 class="fw-bold m-0">JAFFNA</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column">
            <div class="row g-3 h-50 mb-lg-0 mb-md-0 mb-3 pb-5">
                <div class="col-12">
                    <div class="position-relative h-100">
                        <img src="{{ asset('img/Trinco.png') }}" alt="Trinco" class="img-fluid rounded w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 p-3 text-white">
                            <h4 class="fw-bold m-0">TRINCO</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-50 pt-0 mt-3 mt-md-4 mt-lg-4 gx-3">
                <div class="col-6">
                    <div class="position-relative h-100">
                        <img src="{{ asset('img/batti.jpg') }}" alt="batti" class="img-fluid rounded w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h4 class="fw-bold m-0">BATTI</h4>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="position-relative h-100 ">
                        <img src="{{ asset('img/ampara.jpg') }}" alt="ampara" class="img-fluid rounded w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h4 class="fw-bold m-0">AMPARA</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!------------------------------- section6 ---------------------------------------->

<section class=" my-5">
    <div class="text-center mb-5">
        <h5 class="text-center mb-2">Testimonial</h5>
        <h3 class="text-center mb-3" style="color: #000080;">What Our Travelers Say: Real Stories, Real Experiences</h3>
        <p class="text-center mb-0">Create a visual identity for your company and a overall brand</p>
    </div>

    <div class="position-relative d-flex">
        <button class="border-0 bg-transparent slider-control slider-control-prev1" type="button">
            <span class="nav-arrow1 me-0 me-md-0 me-lg-0 ms-2 ms-md-3 ms-lg-5 fs-1"><i class="fa-solid fa-chevron-left"></i></span>
        </button>
        <div id="productSlider" class="product-slider overflow-hidden">
            <div class="product-slider-wrapper1 d-flex">
                <div class="product-card product-card1 px-5 my-4">
                    <div class="testimonial-card p-3 rounded">
                        <div class="d-flex align-items-center mb-3">
                            <img src="img/Ellipse 627.png" alt="Rajesh K" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0 text-danger">Rajesh K</h5>
                                <p class="mb-0">(India)</p>
                            </div>
                        </div>
                        <div class="star-rating mb-3 text-warning">★★★★★</div>
                        <p style="text-align: justify;">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
                    </div>
                </div>
                <div class="product-card product-card1 px-5 my-4">
                    <div class="testimonial-card p-3 rounded">
                        <div class="d-flex align-items-center mb-3">
                            <img src="img/Ellipse 627.png" alt="Rajesh K" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0 text-danger">Rajesh K</h5>
                                <p class="mb-0">(India)</p>
                            </div>
                        </div>
                        <div class="star-rating mb-3 text-warning">★★★★★</div>
                        <p style="text-align: justify;">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
                    </div>
                </div>
                <div class="product-card product-card1 px-5 my-4">
                    <div class="testimonial-card p-3 rounded">
                        <div class="d-flex align-items-center mb-3">
                            <img src="img/Ellipse 627.png" alt="Rajesh K" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0 text-danger">Rajesh K</h5>
                                <p class="mb-0">(India)</p>
                            </div>
                        </div>
                        <div class="star-rating mb-3 text-warning">★★★★★</div>
                        <p style="text-align: justify;">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="border-0 bg-transparent slider-control slider-control-next1" type="button">
            <span class="nav-arrow1 me-2 me-md-3 me-lg-5 ms-0 ms-md-0 ms-lg-0 fs-1"><i class="fa-solid fa-chevron-right"></i></span>
        </button>
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