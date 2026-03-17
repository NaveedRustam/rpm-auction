@extends('rpm_layout.app')

@section('title', 'home')

@section('content')
    <!-- <section class="position-relative d-flex w-100 " style="width:100vw;">
        <div class="d-flex flex-column justify-content-center align-items-center px-3 border-0"
            style="width:60px; background-color:rgb(146, 41, 64);">
            <a href="#latest" class="btn d-flex justify-content-center align-items-center mb-4"
                style="background-color: #d19aa7; color:#000; width:30px; height:70px; border-radius:20px;">
                <i class="fa-solid fa-arrow-down"></i>
            </a>

        </div>
        <div id="heroCarousel" class="carousel slide carousel-vertical w-100 d-none d-lg-block" data-bs-ride="carousel"
            data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/hero-bg1.jpg')}}" class="d-block w-100" alt="Slide 1">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
                        <div class="hero-content  text-light text-md-start">
                            <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                                RPM Auction You can Trust
                            </span>
                            <h1 class="fw-bold display-5" style="font-size: 40px;">
                                Select <span class="fancy-text">our Product</span> at our auction.
                            </h1>
                            <div class="mt-3 mt-sm-5">
                                <a href="#" class="btn btn-custom">
                                    Start A Bid
                                    <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                </a>
                                <a href="#" class="btn btn-custom my-2">View All Auction</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('images/hero-bg2.jpg')}}" class="d-block w-100" alt="Slide 2">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
                        <div class="hero-content  text-light text-md-start">
                            <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                                RPM Auction You can Trust
                            </span>
                            <h1 class="fw-bold display-5" style="font-size: 40px;">
                                Select <span class="fancy-text">our Product</span> at our auction.
                            </h1>
                            <div class="mt-3 mt-sm-5">
                                <a href="#" class="btn btn-custom">
                                    Start A Bid
                                    <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                </a>
                                <a href="#" class="btn btn-custom my-2">View All Auction</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('images/hero-bg3.jpg')}}" class="d-block w-100" alt="Slide 3">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
                        <div class="hero-content  text-light text-md-start">
                            <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                                RPM Auction You can Trust
                            </span>
                            <h1 class="fw-bold display-5" style="font-size: 40px;">
                                Select <span class="fancy-text">our Product</span> at our auction.
                            </h1>
                            <div class="mt-3 mt-sm-5">
                                <a href="#" class="btn btn-custom">
                                    Start A Bid
                                    <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                </a>
                                <a href="#" class="btn btn-custom my-2">View All Auction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="heroCarousel" class="carousel slide  w-100 d-block d-lg-none" data-bs-ride="carousel"
            data-bs-interval="2000">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/hero-bg1.jpg')}}" class="d-block w-100" alt="Slide 1">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-3 ps-sm-5 text-white">
                        <div class="hero-content1  text-light text-md-start ">
                            <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                                RPM Auction You can Trust
                            </span>
                            <h1 class="fw-bold display-5" style="font-size: 30px;">
                                Select <span class="fancy-text">our Product</span> at our auction.
                            </h1>
                            <div class="mt-3 mt-sm-5">
                                <a href="#" class="btn btn-custom">
                                    Start A Bid
                                    <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                </a>
                                <a href="#" class="btn btn-custom my-2">View All Auction</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('images/hero-bg2.jpg')}}" class="d-block w-100" alt="Slide 2">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-3 ps-sm-5 text-white">
                        <div class="hero-content1  text-light text-md-start">
                            <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                                RPM Auction You can Trust
                            </span>
                            <h1 class="fw-bold display-5" style="font-size: 30px;">
                                Select <span class="fancy-text">our Product</span> at our auction.
                            </h1>
                            <div class="mt-3 mt-sm-5">
                                <a href="#" class="btn btn-custom">
                                    Start A Bid
                                    <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                </a>
                                <a href="#" class="btn btn-custom my-2">View All Auction</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('images/hero-bg3.jpg')}}" class="d-block w-100" alt="Slide 3">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-3 ps-sm-5  text-white">
                        <div class="hero-content1  text-light text-md-start">
                            <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                                RPM Auction You can Trust
                            </span>
                            <h1 class="fw-bold display-5" style="font-size: 30px;">
                                Select <span class="fancy-text">our Product</span> at our auction.
                            </h1>
                            <div class="mt-3 mt-sm-5">
                                <a href="#" class="btn btn-custom">
                                    Start A Bid
                                    <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                                </a>
                                <a href="#" class="btn btn-custom my-2">View All Auction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-vertical-indicators my-5 my-sm-5 my-lg-0 me-5">
            <button class="arrow-btn prev-btn d-none d-lg-block" data-bs-target="#heroCarousel"
                data-bs-slide="prev">▲</button>
            <button class="arrow-btn prev-btn d-block d-lg-none" data-bs-target="#heroCarousel" data-bs-slide="prev"><i
                    class="fa-solid fa-angle-up fa-rotate-270"></i></button>
            <div class="line">
                <span class="step active" data-index="0"></span>
                <span class="step" data-index="1"></span>
                <span class="step" data-index="2"></span>
            </div>
            <button class="arrow-btn next-btn d-none d-lg-block" data-bs-target="#heroCarousel"
                data-bs-slide="next">▼</button>
            <button class="arrow-btn prev-btn d-block d-lg-none" data-bs-target="#heroCarousel" data-bs-slide="next"><i
                    class="fa-solid fa-angle-up fa-rotate-90"></i></button>
        </div>

        <div class="welcome-bar position-absolute bottom-0 start-0 w-100 bg-dark text-white py-2 overflow-x-hidden">
            <div class="container-fluid d-flex align-items-center gap-4 small flex-nowrap">
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
            </div>
        </div>

    </section>  -->
    <section class="position-relative d-flex " style="width:100vw;  background-color:rgb(146, 41, 64);">
        <div class="d-flex flex-column justify-content-center align-items-center px-3 border-0"
            style="min-width:61px; background-color:rgb(146, 41, 64);">
            <a href="#latest" class="btn d-flex justify-content-center align-items-center mb-4"
                style="background-color: #d19aa7; color:#000; width:30px; height:70px; border-radius:20px;">
                <i class="fa-solid fa-arrow-down"></i>
            </a>
        </div>
        <div class="owl-carousel p-0 m-0 owl-theme w-100  d-none d-lg-block " id="hero-carousel-desktop" data-aos="fade-up">
            <div class="item w-100" style="background-image:url('{{asset('images/hero-bg1.jpg')}}');">
                <div class="hero-content  px-5 text-light text-md-start" data-aos="fade-up">
                    <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                        RPM Auction You can Trust
                    </span>
                    <h1 class="fw-bold display-5" style="font-size: 35px;">
                        Select <span class="fancy-text">our Product</span> at our auction.
                    </h1>
                    <div class="mt-3 mt-sm-5" data-aos="fade-up">
                        <a href="#" class="btn btn-custom">
                            Start A Bid
                            <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                        </a>
                        <a href="#" class="btn btn-custom my-2">View All Auction</a>
                    </div>
                </div>
            </div>
            <div class="item  w-100" style="background-image:url('{{asset('images/hero-bg2.jpg')}}');">
                <div class="hero-content px-5 text-light text-md-start" data-aos="fade-up">
                    <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                        RPM Auction You can Trust
                    </span>
                    <h1 class="fw-bold display-5" style="font-size: 35px;">
                        Select <span class="fancy-text">our Product</span> at our auction.
                    </h1>
                    <div class="mt-3 mt-sm-5" data-aos="fade-up">
                        <a href="#" class="btn btn-custom">
                            Start A Bid
                            <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                        </a>
                        <a href="#" class="btn btn-custom my-2">View All Auction</a>
                    </div>
                </div>
            </div>
            <div class="item w-100" style="background-image:url('{{ asset('images/hero-bg3.jpg') }}');">
                <div class="hero-content px-5  text-light text-md-start" data-aos="fade-up">
                    <span class="bg-light px-2 py-1 fs-3 opacity-25 text-dark">
                        RPM Auction You can Trust
                    </span>
                    <h1 class="fw-bold display-5" style="font-size: 35px;">
                        Select <span class="fancy-text">our Product</span> at our auction.
                    </h1>
                    <div class="mt-3 mt-sm-5" data-aos="fade-up">
                        <a href="#" class="btn btn-custom">
                            Start A Bid
                            <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                        </a>
                        <a href="#" class="btn btn-custom my-2">View All Auction</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel p-0 m-0 owl-theme w-100 d-block d-lg-none " id="hero-carousel-mobile" data-aos="fade-up">
            <div class="item w-100" style=" background-image:url('{{ asset('images/hero-bg1.jpg') }}');">
                <div class="hero-content1 px-3 text-light text-md-start mb-5 pb-3">
                    <span class="bg-light px-1 py-1 fs-6 opacity-25 text-dark">
                        RPM Auction You can Trust
                    </span>
                    <h1 class="fw-semibold display-5" style="font-size: 28px;">
                        Select <span class="fancy-text1">our Product</span> at our auction.
                    </h1>
                    <div class="mt-0">
                        <a href="#" class="btn btn-custom">
                            Start A Bid
                            <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                        </a>
                        <a href="#" class="btn btn-custom ">View All Auction</a>
                    </div>
                </div>
            </div>
            <div class="item w-100" style="background-image:url('{{ asset('images/hero-bg2.jpg') }}');">
                <div class="hero-content1 px-3 text-light text-md-start mb-5 pb-3" data-aos="fade-up">
                    <span class="bg-light px-1 py-1 fs-6 opacity-25 text-dark">
                        RPM Auction You can Trust
                    </span>
                    <h1 class="fw-semibold display-5" style="font-size: 28px;">
                        Select <span class="fancy-text1">our Product</span> at our auction.
                    </h1>
                    <div class="mt-0" data-aos="fade-up">
                        <a href="#" class="btn btn-custom">
                            Start A Bid
                            <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                        </a>
                        <a href="#" class="btn btn-custom ">View All Auction</a>
                    </div>
                </div>
            </div>
            <div class="item w-100" style="background-image:url('{{ asset('images/hero-bg3.jpg') }}');">
                <div class="hero-content1  px-3 text-light text-md-start mb-5 pb-3">
                    <span class="bg-light px-1 py-1 fs-6 opacity-25 text-dark">
                        RPM Auction You can Trust
                    </span>
                    <h1 class="fw-semibold display-5" style="font-size: 28px;">
                        Select <span class="fancy-text1">our Product</span> at our auction.
                    </h1>
                    <div class="mt-0">
                        <a href="#" class="btn btn-custom">
                            Start A Bid
                            <i class="fa-solid fa-arrow-down fa-rotate-by" style="--fa-rotate-angle: 320deg;"></i>
                        </a>
                        <a href="#" class="btn btn-custom ">View All Auction</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-vertical-indicators my-2 my-sm-5 my-lg-0 me-5">
            <button class="arrow-btn prev-btn d-none d-lg-block ">▲</button>
            <button class="arrow-btn prev-btn d-block d-lg-none"><i class="fa-solid fa-angle-up fa-rotate-270"></i></button>
            <div class="line">
                <span class="step active" data-index="0"></span>
                <span class="step" data-index="1"></span>
                <span class="step" data-index="2"></span>
            </div>
            <button class="arrow-btn next-btn d-none d-lg-block ">▼</button>
            <button class="arrow-btn prev-btn d-block d-lg-none"><i class="fa-solid fa-angle-up fa-rotate-90"></i></button>
        </div>
        <div class="welcome-bar position-absolute bottom-0 start-0 w-100 bg-dark text-white py-2 overflow-x-hidden"
            data-aos="fade-up">
            <div class="container-fluid d-flex align-items-center gap-4 small flex-nowrap">
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
                <i class="fa-solid fa-circle text-danger fa-beat small"></i>
                <span class="text-nowrap">Welcome to RPM AUCTION</span>
            </div>
        </div>
    </section>
    <section id="features" data-aos="fade-up" class="py-5 position-relative"
        style="background-image: url('{{asset('images/pro-bg.png')}}'); background-repeat: no-repeat; background-size: cover; background-color: #F6F0FA;">

        <div class="container py-5">

            <div class="text-center pb-5" data-aos="fade-left">
                <h2 class="fw-semibold bt1 d-inline">4 Steps of Our Work</h2>
                <h2 class="d-inline fst-italic ms-1 font1">Process</h2>
                <p class="text-muted mt-2 fs-5">
                    Follow our streamlined process for a smooth & modern experience
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="step-card text-center p-4 rounded-4 h-100">
                        <div class="step-number my-3">Step-01</div>
                        <h4 class="fw-bold text-dark">📝 Registration</h4>
                        <p class="text-muted">Provide the necessary details to start your journey with us.</p>
                        <ul class="list-unstyled fs-5">
                            <li class="text-start">✔ Specific Information</li>
                            <li class="text-start">✔ Required for Registration</li>
                            <li class="text-start">✔ Secure Identification</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-card text-center p-4 rounded-4 h-100">
                        <div class="step-number my-3">Step-02</div>
                        <h4 class="fw-bold">📦 Select Product</h4>
                        <p class="text-muted">Explore and choose from our wide range of auction products.</p>
                        <ul class="list-unstyled fs-5">
                            <li class="text-start">✔ Search Your Auction</li>
                            <li class="text-start">✔ Find the Right Product</li>
                            <li class="text-start">✔ Make Smart Choices</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-card text-center p-4 rounded-4 h-100">
                        <div class="step-number my-3">Step-03</div>
                        <h4 class="fw-bold">🔨 Go to Bidding</h4>
                        <p class="text-muted">Engage in fair bidding and compete for your desired products.</p>
                        <ul class="list-unstyled fs-5">
                            <li class="text-start">✔ Choose the Product</li>
                            <li class="text-start">✔ Place Competitive Bids</li>
                            <li class="text-start">✔ Stay Engaged in Real-time</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-card text-center p-4 rounded-4 h-100">
                        <div class="step-number my-3">Step-04</div>
                        <h4 class="fw-bold">💳 Make Payment</h4>
                        <p class="text-muted">Secure and easy payment methods to finalize your purchase.</p>
                        <ul class="list-unstyled fs-5">
                            <li class="text-start">✔ Verified Payment Gateway</li>
                            <li class="text-start">✔ Multiple Options Available</li>
                            <li class="text-start">✔ Safe & Encrypted</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="category-section " data-aos="fade-up"
        style="background-repeat: no-repeat; background-size: cover; background-color: rgb(225,221,222);">
        <div class="container">
            <div class=" mx-lg-5 pt-lg-5 px-lg-5">
                <div class=" pt-4 mx-lg-5 my-lg-0 px-lg-5">
                    <div class="text-start mb-5" data-aos="fade-left">
                        <h2 class="fw-semibold bt1 d-inline">Explore</h2>
                        <h2 class="d-inline fst-italic ms-1 font1">Category</h2>
                    </div>
                    <div class="row g-4 justify-content-center" data-aos="fade-up">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                            <div class="category-card text-center p-4">
                                <img src="{{asset('images/honda-logo.png')}}" alt="Toyota" class="brand-logo mb-3 w-50">
                                <h6 class="fw-bold mb-1">Toyota Camry</h6>
                                <p class="text-muted mb-0">8,842 Item</p>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                            <div class="category-card text-center p-4">
                                <img src="{{asset('images/honda-logo.png')}}" alt="BMW" class="brand-logo mb-3 w-50">
                                <h6 class="fw-bold mb-1">BMW</h6>
                                <p class="text-muted mb-0">6,698 Item</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                            <div class="category-card text-center p-4">
                                <img src="{{asset('images/tesla-logo.svg.png')}}" alt="Tesla" class="brand-logo mb-3 w-50">
                                <h6 class="fw-bold mb-1">Tesla</h6>
                                <p class="text-muted mb-0">6,698 Item</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                            <div class="category-card text-center p-4">
                                <img src="{{asset('images/nissan-logo.svg.png')}}" alt="Nissan Rogue"
                                    class="brand-logo mb-3 w-50">
                                <h6 class="fw-bold mb-1">Nissan Rogue</h6>
                                <p class="text-muted mb-0">6,698 Item</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                            <div class="category-card text-center p-4">
                                <img src="{{asset('images/hyundai-logo.svg.png')}}" alt="Hyundai"
                                    class="brand-logo mb-3 w-50">
                                <h6 class="fw-bold mb-1">Hyundai</h6>
                                <p class="text-muted mb-0">6,698 Item</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                            <div class="category-card text-center p-4">
                                <img src="{{asset('images/honda-logo.svg.png')}}" alt="Honda" class="brand-logo mb-3 w-50">
                                <h6 class="fw-bold mb-1">Honda</h6>
                                <p class="text-muted mb-0">6,698 Item</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 py-5" data-aos="fade-left">
                        <a href="#" class="view-all-link text-dark">View All Category <i
                                class="fa-solid fa-arrow-down  fa-rotate-by " style="--fa-rotate-angle: 320deg;"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="auction-section " data-aos="fade-up" id="latest"
        style="background-image: url('{{asset('images/pro-bg.png')}}'); background-repeat: no-repeat; background-size: cover; background-color: rgb(255,255,255);">
        <div class=" my-4 mx-lg-5">
            <div class=" p-lg-5 m-lg-5">
                <div class="container">
                    <div class="text-start mb-5" data-aos="fade-left">
                        <h2 class="fw-semibold bt1 d-inline">Latest</h2>
                        <h2 class="d-inline fst-italic ms-1 font1">Auction</h2>
                    </div>


                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3" data-aos="fade-up">
                            <div class="card shadow-lg border-0 h-100">
                                <div class="position-relative">
                                    <img src="{{asset('images/image11.jpg')}}" class="card-img-top" alt="Car">
                                    <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                        LIVE
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-semibold fs-5">Genesis motors pioneering on tomorrow's drive.</h6>
                                    <p class="mb-1 text-muted ">Current Bid at:</p>
                                    <h5 class="fw-bold">$5,758</h5>
                                    <button class="btn btn-dark w-100">Notify Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3" data-aos="fade-up">
                            <div class="card shadow-lg border-0 h-100">
                                <div class="position-relative">
                                    <img src="{{asset('images/image12.jpg')}}" class="card-img-top" alt="Car">
                                    <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                        UPCOMING
                                    </span>
                                    <span class="badge bg-light text-dark position-absolute top-0 start-0 m-2 mt-5"
                                        style="margin-top: 78px;">
                                        Lot #25896742
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-semibold fs-5">Titan motors build to conquer every mile cars.</h6>
                                    <p class="mb-1 text-muted ">Current Bid at:</p>
                                    <h5 class="fw-bold">$6,867</h5>
                                    <button class="btn btn-dark w-100">Notify Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3" data-aos="fade-up">
                            <div class="card shadow-lg border-0 h-100">
                                <div class="position-relative">
                                    <img src="{{asset('images/image13.jpg')}}" class="card-img-top" alt="Car">
                                    <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                        LIVE
                                    </span>

                                </div>
                                <div class="card-body">
                                    <h6 class="fw-semibold fs-5">Opp automotive reaching new heights of excellence.
                                    </h6>
                                    <p class="mb-1 text-muted">Current Bid at:</p>
                                    <h5 class="fw-bold">$7,529</h5>
                                    <button class="btn btn-dark w-100">Notify Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3" data-aos="fade-up">
                            <div class="card shadow-lg border-0 h-100">
                                <div class="position-relative">
                                    <img src="{{asset('images/image14.jpg')}}" class="card-img-top" alt="Car">
                                    <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                        LIVE
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h6 class="fw-semibold fs-5">Genesis motors pioneering on tomorrow’s drive.</h6>
                                    <p class="mb-1 text-muted ">Current Bid at:</p>
                                    <h5 class="fw-bold">$5,758</h5>
                                    <button class="btn btn-dark w-100">Notify Me</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 pb-4" data-aos="fade-left">
                    <a href="#" class="view-all-link text-dark">View All Auction <i
                            class="fa-solid fa-arrow-down  fa-rotate-by " style="--fa-rotate-angle: 320deg;"></i></a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section data-aos="fade-up">
        <div class="owl-carousel">
            <div class="position-relative" data-aos="fade-right"
                style="background: url('{{ asset('images/image4.jpg') }}') center/cover no-repeat;min-height: 450px;">

                <div class="auction-card text-start shadow-lg  p-3 position-absolute top-50 start-20 translate-middle-y"
                    data-aos="fade-left"
                    style="margin-left: 40px; min-width:25%;  background-image: url('{{asset('images/image.png')}}'); background-repeat: no-repeat; background-size: cover;">
                    <p class="mb-1">Current Bid at:</p>
                    <div class="price fw-bold fs-4">$2,489</div>

                    <div class="auction-title fs-5 mb-3">
                        Sight of pace where <br>efficiency converges.
                    </div>

                    <p class="mb-1">Auction Will Be End:</p>
                    <div class="countdown d-flex gap-3 mb-3">
                        <div class="text-center">
                            <h5 class="mb-0">00</h5><small>Days</small>
                        </div>
                        <div class="text-center">
                            <h5 class="mb-0">00</h5><small>Hours</small>
                        </div>
                        <div class="text-center">
                            <h5 class="mb-0">00</h5><small>Minutes</small>
                        </div>
                        <div class="text-center">
                            <h5 class="mb-0">00</h5><small>Seconds</small>
                        </div>
                    </div>

                    <button class="btn btn-custom ">Bid Now</button>
                </div>
            </div>

        </div>
    </section>
    <section class="comming-auction-section" data-aos="fade-up"
        style="background-image: url('{{asset('images/sidebg.png')}}'); background-repeat: no-repeat; background-size:contain; background-color: rgb(255,255,255);">
        <div class=" my-4 mx-lg-5 pb-lg-5 px-lg-5">
            <div class="container">
                <div class="row g-3 align-items-start">
                    <div class="col-lg-3 col-md-3">
                        <div class="auction-featured-card shadow rounded-4 p-4 text-white d-flex flex-column justify-content-between"
                            data-aos="fade-left"
                            style="background-image: url('{{ asset('images/car11.jpg') }}'); background-size: cover; background-position: center;">

                            <div>
                                <p class="mb-1 small text-light">Current Bid at:</p>
                                <h3 class="fw-bold text-danger">$2,898</h3>
                                <h5 class="fw-semibold my-3">
                                    Velocity Vision Where <br> Performance Meets.
                                </h5>
                            </div>

                            <div class="d-flex justify-content-between mb-3  flex-wrap" style="margin-top:175px;">
                                <div class="text-center bg-white p-2 rounded flex-fill m-1">
                                    <h5 class="mb-0 text-muted">00</h5><small class="text-muted">Days</small>
                                </div>
                                <div class="text-center bg-white p-2 rounded flex-fill m-1">
                                    <h5 class="mb-0 text-muted">00</h5><small class="text-muted">Hours</small>
                                </div>
                                <div class="text-center bg-white p-2 rounded flex-fill m-1">
                                    <h5 class="mb-0 text-muted">00</h5><small class="text-muted">Mins</small>
                                </div>
                                <div class="text-center bg-white p-2 rounded flex-fill m-1">
                                    <h5 class="mb-0 text-muted">00</h5><small class="text-muted">Secs</small>
                                </div>
                            </div>

                            <button class="btn btn-custom w-50  " data-aos="fade-up">Bid Now</button>
                        </div>


                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="mb-4" data-aos="fade-left">
                            <h3 class="fw-semibold bt1 d-inline">Upcoming</h3>
                            <h3 class="d-inline fst-italic ms-1 font1">Auction</h3>

                            <div class="pt-0 pt-sm-2 pt-lg-4 pt-xl-4">
                                <img src="{{ asset('images/under.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row g-3" style="padding-top: 30px;" data-aos="fade-up">
                            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                                <div class="card shadow-lg border-0 h-100">
                                    <div class="position-relative">
                                        <img src="{{asset('images/image7.jpg')}}" class="card-img-top" alt="Car">
                                        <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                            UPCOMING
                                        </span>
                                        <span class="badge bg-light text-dark position-absolute top-0 start-0 m-2 mt-5"
                                            style="margin-top: 78px;">
                                            Lot #25896742
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-semibold">Genesis motors pioneering on tomorrow's drive.</h6>
                                        <p class="mb-1 text-muted small">Current Bid at:</p>
                                        <h5 class="fw-bold">$5,758</h5>
                                        <button class="btn btn-dark w-100">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                                <div class="card shadow-lg border-0 h-100">
                                    <div class="position-relative">
                                        <img src="{{asset('images/image8.jpg')}}" class="card-img-top" alt="Car">
                                        <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                            UPCOMING
                                        </span>
                                        <span class="badge bg-light text-dark position-absolute top-0 start-0 m-2 mt-5"
                                            style="margin-top: 78px;">
                                            Lot #25896742
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-semibold">Titan motors build to conquer every mile cars.</h6>
                                        <p class="mb-1 text-muted small">Current Bid at:</p>
                                        <h5 class="fw-bold">$6,867</h5>
                                        <button class="btn btn-dark w-100">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                                <div class="card shadow-lg border-0 h-100">
                                    <div class="position-relative">
                                        <img src="{{asset('images/image9.jpg')}}" class="card-img-top" alt="Car">
                                        <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                            UPCOMING
                                        </span>
                                        <span class="badge bg-light text-dark position-absolute top-0 start-0 m-2 mt-5"
                                            style="margin-top: 78px;">
                                            Lot #25896742
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-semibold">Opp automotive reaching new heights of excellence.
                                        </h6>
                                        <p class="mb-1 text-muted small">Current Bid at:</p>
                                        <h5 class="fw-bold">$7,529</h5>
                                        <button class="btn btn-dark w-100">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                                <div class="card shadow-lg border-0 h-100">
                                    <div class="position-relative">
                                        <img src="{{asset('images/image10.jpg')}}" class="card-img-top" alt="Car">
                                        <span class="badge bg-primary position-absolute top-0 start-0 m-2 ">
                                            UPCOMING
                                        </span>
                                        <span class="badge bg-light text-dark position-absolute top-0 start-0 m-2 mt-5"
                                            style="margin-top: 78px;">
                                            Lot #25896742
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-semibold">Genesis motors pioneering on tomorrow’s drive.</h6>
                                        <p class="mb-1 text-muted small">Current Bid at:</p>
                                        <h5 class="fw-bold">$5,758</h5>
                                        <button class="btn btn-dark w-100">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- <style>
        .sticky-tabs {
            position: sticky;
            top: 0;
            z-index: 1050;

        }

        #features {
            position: relative;
            overflow: visible;
            /* allow page to scroll normally */
        }

        .tab-pane {
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .tab-pane.show.active {
            opacity: 1;
            transform: translateY(0);
        }

        .tab-pane:not(.show.active) {
            opacity: 0;
            transform: translateY(40px);
        }
    </style>
    <section id="features" class="mb-5 d-none d-lg-block"
        style="background-image: url('{{asset('images/pro-bg.png')}}'); background-repeat: no-repeat; background-size: cover;  background-color: #F6F0FA;">

        <div class="container text-center " style="font-family: Roboto, sans-serif;">

            <div class="text-center mb-5 pt-5">
                <h2 class="fw-semibold bt1 d-inline">4 Step Of Our Work</h2>
                <h2 class="d-inline fst-italic ms-1 font1">Process</h2>
            </div>
            <!-- Sticky Nav -->
            <div class=" ">
                <div class="sticky-tabs d-flex justify-content-center my-3">
                    <ul class="nav nav-pills border  rounded-pill" id="featureTabs">
                        <li class="nav-item">
                            <button class="nav-link active border-0 rounded-pill text-white bg-danger py-3 px-4 fw-bold"
                                data-bs-target="#step1" data-index="0">Step–01</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step2" data-index="1">Step–02</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step3" data-index="2">Step–03</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step4" data-index="2">Step–04</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content (only one visible at a time) -->
            <div class="tab-content mt-4 pb-4 d-none d-lg-block" style="height:auto; overflow:hidden;">
                <div class="tab-pane fade show active" id="step1">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="{{ asset('images/Buyer Feature 4.avif') }}" class="img-fluid" style="height:300px;"
                                alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold"> 📝 Registration</h2>
                            <p class="text-muted ">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="step2">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="{{ asset('images/mobile-ad.avif') }}" class="img-fluid" style="height:300px;"
                                alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">📦 Select Product</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                            <ol class="text-start fs-4">
                                <li>Search Your Auction</li>
                                <li>Find The Right Product</li>
                                <li>Find The Right Product</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="step3">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="{{ asset('images/Buyer Feature 5.avif') }}" class="img-fluid" style="height:300px;"
                                alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">🔨 Go to Bidding</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                            <ol class="text-start fs-4">
                                <li>Choose The Bid Product</li>
                                <li>Bid according your ability</li>
                                <li>Keep your eyes on the bid</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step4">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="{{ asset('images/mobile-ad.avif') }}" class="img-fluid" style="height:300px;"
                                alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">💳 Make Payment</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                            <ol class="text-start fs-4">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll("#featureTabs .nav-link");
            const panes = document.querySelectorAll(".tab-pane");
            const section = document.querySelector("#features");
            let currentIndex = 0;
            let isScrolling = false;
            let isLocked = false;

            function activateTab(index) {
                tabs.forEach(btn => btn.classList.remove("active", "bg-danger", "text-white"));
                tabs.forEach(btn => btn.classList.add("text-danger", "border", "border-danger"));
                tabs[index].classList.add("active", "bg-danger", "text-white");
                tabs[index].classList.remove("text-danger", "border", "border-danger");

                panes.forEach(p => p.classList.remove("show", "active"));
                panes[index].classList.add("show", "active");
            }

            // Default: first tab active
            activateTab(0);

            // Section observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        isLocked = true;
                        currentIndex = 0;
                        activateTab(0);
                        // document.body.style.overflow = "hidden"; // lock scroll
                    } else {
                        isLocked = false;
                        // document.body.style.overflow = ""; // unlock
                    }
                });
            }, { threshold: 0.6 });

            observer.observe(section);

            // Scroll handling
            window.addEventListener("wheel", function (e) {
                if (isLocked && !isScrolling) {
                    if (e.deltaY > 0) {
                        if (currentIndex < tabs.length - 1) {
                            currentIndex++;
                            activateTab(currentIndex);
                            // ❌ e.preventDefault();
                        } else {
                            isLocked = false;
                        }
                    } else if (e.deltaY < 0) {
                        if (currentIndex > 0) {
                            currentIndex--;
                            activateTab(currentIndex);
                            // ❌ e.preventDefault();
                        } else {
                            isLocked = false;
                        }
                    }
                    isScrolling = true;
                    setTimeout(() => isScrolling = false, 800);
                }
            }, { passive: true });   // passive:true ensures browser scrolls smoothly


            // Click handling
            tabs.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                    currentIndex = i;
                    activateTab(i);
                });
            });
        });
    </script> --}}
    {{-- <section id="features" class="mb-5 d-none d-lg-block"
        style="background-image: url('images/pro-bg.png'); background-repeat: no-repeat; background-size: cover;  background-color: #F6F0FA;">

        <div class="container text-center " style="font-family: Roboto, sans-serif;">

            <div class="text-center mb-5 pt-5">
                <h2 class="fw-semibold bt1 d-inline">4 Step Of Our Work</h2>
                <h2 class="d-inline fst-italic ms-1 font1">Process</h2>
            </div>
            <!-- Sticky Nav -->
            <div class=" ">
                <div class="sticky-tabs d-flex justify-content-center my-3">
                    <ul class="nav nav-pills border  rounded-pill" id="featureTabs">
                        <li class="nav-item">
                            <button class="nav-link active border-0 rounded-pill text-white bg-danger py-3 px-4 fw-bold"
                                data-bs-target="#step1" data-index="0">Step–01</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step2" data-index="1">Step–02</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step3" data-index="2">Step–03</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step4" data-index="2">Step–04</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content (only one visible at a time) -->
            <div class="tab-content mt-4 pb-4 d-none d-lg-block" style="height:auto; overflow:hidden;">
                <div class="tab-pane fade show active" id="step1">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/Buyer Feature 4.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold"> 📝 Registration</h2>
                            <p class="text-muted ">Cras cursus faucibus enim id portac et feugiat tortor duis ut
                                egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="step2">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/mobile-ad.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">📦 Select Product</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Search Your Auction</li>
                                <li>Find The Right Product</li>
                                <li>Find The Right Product</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="step3">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/Buyer Feature 5.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">🔨 Go to Bidding</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Choose The Bid Product</li>
                                <li>Bid according your ability</li>
                                <li>Keep your eyes on the bid</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step4">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/mobile-ad.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">💳 Make Payment</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- <style>
        .sticky-tabs {
            position: static;
            top: 50px;
            z-index: 1050;
        }

        #features {
            position: relative;
            overflow: visible;
            /* allow page to scroll normally */
        }

        .tab-pane {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }

        .tab-pane.active-anim {
            opacity: 1;
            transform: translateY(0);
        }

        .tab-pane.show.active {
            opacity: 1;
            transform: translateY(0);
        }

        .tab-pane:not(.show.active) {
            opacity: 0;
            transform: translateY(50px);
        }
    </style> --}}
    {{-- <section id="features" class="mb-5 d-none d-lg-block"
        style="background-image: url('images/pro-bg.png'); background-repeat: no-repeat; background-size: cover;  background-color: #F6F0FA;">

        <div class="container text-center " style="font-family: Roboto, sans-serif;">

            <div class="text-center mb-5 pt-5">
                <h2 class="fw-semibold bt1 d-inline">4 Step Of Our Work</h2>
                <h2 class="d-inline fst-italic ms-1 font1">Process</h2>
            </div>
            <!-- Sticky Nav -->
            <div class=" ">
                <div class="sticky-tabs d-flex justify-content-center my-3">
                    <ul class="nav nav-pills border  rounded-pill" id="featureTabs">
                        <li class="nav-item">
                            <button class="nav-link active border-0 rounded-pill text-white bg-danger py-3 px-4 fw-bold"
                                data-bs-target="#step1" data-index="0">Step–01</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step2" data-index="1">Step–02</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step3" data-index="2">Step–03</button>
                        </li>
                        <li class="nav-item">
                            <button
                                class="nav-link border-0 rounded-pill text-danger border border-danger py-3 px-4 fw-bold"
                                data-bs-target="#step4" data-index="3">Step–04</button>

                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content (only one visible at a time) -->
            <div class="tab-content mt-4 pb-4 d-none d-lg-block" style="height:auto; overflow:hidden;">
                <div class="tab-pane fade show active" id="step1">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/Buyer Feature 4.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold"> 📝 Registration</h2>
                            <p class="text-muted ">Cras cursus faucibus enim id portac et feugiat tortor duis ut
                                egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="step2">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/mobile-ad.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">📦 Select Product</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Search Your Auction</li>
                                <li>Find The Right Product</li>
                                <li>Find The Right Product</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="step3">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/Buyer Feature 5.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">🔨 Go to Bidding</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Choose The Bid Product</li>
                                <li>Bid according your ability</li>
                                <li>Keep your eyes on the bid</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="step4">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-end">
                            <img src="images/mobile-ad.avif" class="img-fluid" style="height:300px;" alt="Phone">
                        </div>
                        <div class="col-md-4 text-start">
                            <h2 class="fw-bold">💳 Make Payment</h2>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start fs-4">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{--
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll("#featureTabs .nav-link");
            const panes = document.querySelectorAll(".tab-pane");
            const section = document.querySelector("#features");

            let currentIndex = 0;
            let isLocked = false;
            let sectionActive = false;
            let direction = "down"; // track entry direction

            function activateTab(index) {
                tabs.forEach(btn => btn.classList.remove("active", "bg-danger", "text-white"));
                tabs.forEach(btn => btn.classList.add("text-danger", "border", "border-danger"));
                tabs[index].classList.add("active", "bg-danger", "text-white");
                tabs[index].classList.remove("text-danger", "border", "border-danger");

                panes.forEach(p => p.classList.remove("show", "active"));
                panes[index].classList.add("show", "active");
            }

            function changeStep(forward = true) {
                if (isLocked) return;
                isLocked = true;

                let changed = false;

                if (forward && currentIndex < tabs.length - 1) {
                    currentIndex++;
                    changed = true;
                } else if (!forward && currentIndex > 0) {
                    currentIndex--;
                    changed = true;
                }

                if (changed) {
                    activateTab(currentIndex);
                    setTimeout(() => { isLocked = false; }, 600);
                } else {
                    // reached boundary → release scroll
                    sectionActive = false;
                    isLocked = false;
                }
            }

            // Scroll inside section
            window.addEventListener("wheel", (e) => {
                if (!sectionActive) return;

                if (e.deltaY > 0) {
                    // going down
                    if (direction === "down" && currentIndex < tabs.length - 1) {
                        changeStep(true);
                        e.preventDefault();
                    } else if (direction === "down" && currentIndex === tabs.length - 1) {
                        sectionActive = false; // release after last step
                    }
                } else {
                    // going up
                    if (direction === "up" && currentIndex > 0) {
                        changeStep(false);
                        e.preventDefault();
                    } else if (direction === "up" && currentIndex === 0) {
                        sectionActive = false; // release after first step
                    }
                }
            }, { passive: false });

            // Observer: detect entry direction
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.boundingClientRect.top >= 0) {
                            // entered from top → normal forward steps
                            sectionActive = true;
                            direction = "down";
                            currentIndex = 0;
                            activateTab(0);
                        } else if (entry.boundingClientRect.bottom <= window.innerHeight) {
                            // entered from bottom → reverse steps
                            sectionActive = true;
                            direction = "up";
                            currentIndex = tabs.length - 1;
                            activateTab(currentIndex);
                        }
                    } else {
                        sectionActive = false;
                        // reset when fully out of view
                        currentIndex = 0;
                        activateTab(0);
                    }
                });
            }, { threshold: 0.6 });

            observer.observe(section);

            // Init first tab
            activateTab(0);
        });
    </script> --}}
    {{-- <section class="work-process-mixed d-none d-lg-block py-5"
        style="background-image: url('{{asset('images/pro-bg.png')}}'); background-repeat: no-repeat; background-size: cover;  background-color: #F6F0FA;">
        <div class="container position-relative my-5">
            <div class="text-center mb-5">
                <h2 class="fw-semibold bt1 d-inline">4 Step Of Our Work</h2>
                <h2 class="d-inline fst-italic ms-1 font1">Process</h2>
            </div>
            <div class="steps-line d-flex justify-content-between align-items-center mx-5 position-relative">
                <div class="step-badge-wrap text-center">
                    <div class="step-badge bt2 text-white">Step–01</div>
                    <div class="arrow-down"></div>
                </div>
                <div class="step-badge-wrap text-center">
                    <div class="step-badge bt2 text-white">Step–02</div>
                    <div class="arrow-down"></div>
                </div>
                <div class="step-badge-wrap text-center">
                    <div class="step-badge bt2 text-white">Step–03</div>
                    <div class="arrow-down"></div>
                </div>
                <div class="step-badge-wrap text-center">
                    <div class="step-badge bt2 text-white">Step–04</div>
                    <div class="arrow-down"></div>
                </div>
                <div class="steps-dashed"></div>
            </div>
            <div class="row text-center mt-5  g-4">
                <div class="col-md-3">
                    <div class="step-card shadow p-5">
                        <h5 class="fw-bold"> 📝 Registration</h5>
                        <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                        <ol class="text-start">
                            <li>Specific Information</li>
                            <li>Required For Registration</li>
                            <li>Such As Identification</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card shadow p-5">
                        <h5 class="fw-bold">📦 Select Product</h5>
                        <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                        <ol class="text-start">
                            <li>Search Your Auction</li>
                            <li>Find The Right Product</li>
                            <li>Find The Right Product</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card shadow p-5">
                        <h5 class="fw-bold">🔨 Go to Bidding</h5>
                        <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                        <ol class="text-start">
                            <li>Choose The Bid Product</li>
                            <li>Bid according your ability</li>
                            <li>Keep your eyes on the bid</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card shadow p-5">
                        <h5 class="fw-bold">💳 Make Payment</h5>
                        <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.</p>
                        <ol class="text-start">
                            <li>Specific Information</li>
                            <li>Required For Registration</li>
                            <li>Such As Identification</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="work-process-mixed  d-block d-lg-none">
        <div class="  my-4 mx-lg-5 py-lg-5 px-lg-5">
            <div class="container position-relative">
                <div class="text-center mb-5">
                    <h3 class="fw-semibold bt1 d-inline">4 Step Of Our Work</h3>
                    <h3 class="d-inline fst-italic ms-1 font1">Process</h3>
                </div>
                <div class="steps-vertical1 position-relative mx-auto">
                    <div class="step-badge-wrap1 text-center">
                        <div class="step-badge1 bt2 text-white">Step–01</div>
                        <div class="arrow-down1"></div>
                        <div class="step-card shadow p-4 mt-5">
                            <h5 class="fw-bold">📝 Registration</h5>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                    <div class="step-badge-wrap1 text-center mt-5">
                        <div class="step-badge1 bt2 text-white">Step–02</div>
                        <div class="arrow-down1"></div>
                        <div class="step-card shadow p-4 mt-5">
                            <h5 class="fw-bold">📦 Select Product</h5>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start">
                                <li>Search Your Auction</li>
                                <li>Find The Right Product</li>
                                <li>Find The Right Product</li>
                            </ol>
                        </div>
                    </div>
                    <div class="step-badge-wrap1 text-center mt-5">
                        <div class="step-badge1 bt2 text-white">Step–03</div>
                        <div class="arrow-down1"></div>
                        <div class="step-card shadow p-4 mt-5">
                            <h5 class="fw-bold">🔨 Go to Bidding</h5>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start">
                                <li>Choose The Bid Product</li>
                                <li>Bid according your ability</li>
                                <li>Keep your eyes on the bid</li>
                            </ol>
                        </div>
                    </div>
                    <div class="step-badge-wrap1 text-center mt-5">
                        <div class="step-badge1 bt2 text-white">Step–04</div>
                        <div class="arrow-down1"></div>
                        <div class="step-card shadow p-4 mt-5">
                            <h5 class="fw-bold">💳 Make Payment</h5>
                            <p class="text-muted">Cras cursus faucibus enim id portac et feugiat tortor duis ut egestas.
                            </p>
                            <ol class="text-start">
                                <li>Specific Information</li>
                                <li>Required For Registration</li>
                                <li>Such As Identification</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="faq-section py-lg-4"
        style="background-image: url('http://127.0.0.1:8000/images/sidebg.png'); background-repeat: no-repeat; background-size:contain; background-color: rgb(255,255,255); background-size:50%50%; ">
        <div class="  mx-2 px-2 mx-sm-3 px-sm-3 mx-lg-5 px-lg-5"  data-aos="fade-up">
            <h2 class="fw-semibold bt1 d-inline">Frequently Asked</h2>
            <h2 class="d-inline fst-italic ms-1 font1">Questions</h2>
            <div class="faq-container"  data-aos="fade-up">
                <div class="faq-sidebar "  data-aos="fade-left">
                    <div class="faq-tabs">
                        <ul class="list-group text-center">
                            <li class="list-group-item active">General</li>
                            <li class="list-group-item">Payment</li>
                            <li class="list-group-item">Bidding</li>
                        </ul>
                    </div>
                    <div class="contact-box">
                        <p class="fw-bold mb-2">Ask the help community<br>write now!</p>
                        <div class="mail-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <p class="text-muted mb-1">To Send Mail</p>
                        <a href="mailto:info@gmail.com">info@gmail.com</a>
                    </div>
                </div>
                <div class="faq-content"  data-aos="fade-up">
                    <div class="accordion-item active"  data-aos="fade-up">
                        <div class="accordion-header">
                            <span>What is an auction?</span>
                            <span>−</span>
                        </div>
                        <div class="accordion-body">
                            An auction is a public sale where goods or services are sold to the highest bidder.
                            Bidders compete to offer the highest price, and the item is awarded to the bidder with
                            the
                            highest bid when the auction ends.
                        </div>
                    </div>

                    <div class="accordion-item"  data-aos="fade-up">
                        <div class="accordion-header">
                            <span>How do auctions work?</span>
                            <span>+</span>
                        </div>
                        <div class="accordion-body">
                            Auctions work by allowing bidders to place competing offers within a specific time
                            frame.
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up">
                        <div class="accordion-header">
                            <span>What types of auctions are there?</span>
                            <span>+</span>
                        </div>
                        <div class="accordion-body">
                            There are many auction types including English auctions, Dutch auctions, sealed-bid, and
                            reverse
                            auctions.
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up">
                        <div class="accordion-header">
                            <span>Who can participate in auctions?</span>
                            <span>+</span>
                        </div>
                        <div class="accordion-body">
                            Anyone who registers and meets the auction’s terms and conditions can participate.
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up">
                        <div class="accordion-header">
                            <span>What happens if I win an auction?</span>
                            <span>+</span>
                        </div>
                        <div class="accordion-body">
                            If you win an auction, you are obligated to pay the winning amount and complete the
                            transaction.
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="brands text-center py-4">
                <p class="fw-semibold mb-4">We Worked With Global Largest Brand</p>

                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-6 col-md-2">
                        <img src="{{asset('images/brand6.png')}}" alt="Brand6" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{asset('images/brand5.png')}}" alt="Brand5" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{asset('images/brand4.png')}}" alt="Brand4" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{asset('images/brand3.png')}}" alt="Brand3" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{asset('images/brand2.png')}}" alt="Brand2" class="img-fluid">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{asset('images/brand1.png')}}" alt="Brand1" class="img-fluid">
                    </div>
                </div>
            </div> --}}


        </div>
    </section>
    <section class="py-4"
        style="background-image: url('{{asset('images/pro-bg.png')}}'); background-repeat: no-repeat; background-size: cover; background-color: rgb(255,255,255);">
        <div class="container-fluid text-center py-5" data-aos="fade-up">
            <div  data-aos="fade-up">
                <h2 class="fw-semibold bt1 d-inline mb-3">We Worked With</h2>
                <h2 class="d-inline fst-italic ms-1 font1 mb-3">Global Largest Brand</h2>
            </div>
            <div class="brands-wrapper pt-5"  data-aos="fade-up">
                <div class="brands-track">
                    <div class="brand-item"><img src="{{asset('images/brand2.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand1.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand6.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand5.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand4.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand3.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand2.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand1.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand6.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand5.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand4.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand3.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand2.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand1.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand6.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand5.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand4.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand3.png')}}" alt="Brand"></div>
                    <div class="brand-item"><img src="{{asset('images/brand2.png')}}" alt="Brand"> </div>
                    <div class="brand-item"><img src="{{asset('images/brand1.png')}}" alt="Brand"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="" style="background-color: #FFC7D3;">
        <div class=" pt-4 mx-lg-5 py-lg-5 px-lg-5" data-aos="fade-up">
            <div class="container text-center">
                <h2 class="fw-semibold fs-3 text-dark"  data-aos="fade-up">
                    <h3 class="fw-semibold bt1 d-inline">Our Happy Customers</h3>
                    <h3 class="d-inline fst-italic ms-1 font1">Speak</h3>
                </h2>

                <div class="row mt-4 g-4"  data-aos="fade-up">
                    <div class="col-md-6 col-lg-4"  data-aos="fade-up">
                        <div class="testimonial-card text-start">
                            <h5 class="testimonial-title">Great Auction Product!</h5>
                            <p class="testimonial-quote">“Feel free to customize the key features based on them helps
                                potential clients understand the specific values they'll receive at each pricing tier.”
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="https://i.pravatar.cc/50?img=3" alt="Brooks" class="customer-img me-2">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Brooks Abelam</h6>
                                        <small class="text-muted">CEO at asmt.com</small>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small class="text-muted d-block">Jan 20, 2024</small>
                                    <small class="text-muted">10:30 AM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="testimonial-card text-start">
                            <h5 class="testimonial-title">Fantastic Bidding Item!</h5>
                            <p class="testimonial-quote">“Please feel free to alter the main features in a way that best
                                explains to prospective customers the precise benefits they will receive at each price
                                point.”</p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="https://i.pravatar.cc/50?img=5" alt="Weston" class="customer-img me-2">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Weston Bennett</h6>
                                        <small class="text-muted">CEO at asmt.com</small>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small class="text-muted d-block">Dec 31, 2023</small>
                                    <small class="text-muted">1:46 PM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="testimonial-card text-start">
                            <h5 class="testimonial-title">Outstanding Auction Items!</h5>
                            <p class="testimonial-quote">“You are welcome to alter the salient characteristics in a way
                                that
                                makes prospective customers aware of the precise benefits associated with each price
                                point.”
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="https://i.pravatar.cc/50?img=7" alt="Penelope" class="customer-img me-2">
                                    <div>
                                        <h6 class="mb-0 fw-semibold">Penelope Gian</h6>
                                        <small class="text-muted">CEO at asmt.com</small>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <small class="text-muted d-block">Dec 31, 2023</small>
                                    <small class="text-muted">1:46 PM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="" style="background-color: #FFC7D3;">
        <section
            class="auction-banner  d-flex flex-column flex-lg-row align-items-center justify-content-between px-4 px-lg-5 py-5 position-relative"
            style="background: rgb(146, 41, 64) url('{{asset('images/Group 2032.png')}}') repeat center center / cover;">
            <div class="text-center text-lg-start text-white ms-lg-5 ps-lg-5 col-12 col-lg-6" data-aos="fade-up">
                <h2 class="mb-4 fw-bold" data-aos="fade-up">
                    Now Here? <span class="fst-italic">Start your</span><br class="d-none d-md-block">
                    <span class="fst-italic">Auction</span> Bid Now.
                </h2>

                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3" data-aos="fade-up">
                    <a href="#" class="btn btn-dark px-4 py-2 rounded-2">
                        How To Bid <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light px-4 py-2 rounded-2">
                        How To Sell <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div
                class="mt-lg-0 text-center position-relative mx-5 px-5 me-lg-5 pe-lg-5  mx-auto  m-sm-5 mt-5 mt-lg-0 col-12 col-sm-12 col-lg-6" data-aos="fade-up">

                <img src="{{ asset('images/Background (1).png') }}" alt="Background"
                    class="img-fluid position-absolute top-50 start-50 translate-middle"
                    style="max-height:460px; z-index:1;padding-top:226px; max-width:350px; ">
                <div class="">
                    <img src="{{ asset('images/woman-auction.png') }}" alt="Auction Figure"
                        class="img-fluid position-relative" style="max-height:460px; z-index:2; right: 46px;top: 72px; ">
                </div>

            </div>


            <img src="{{ asset('images/SVG.png') }}" alt="SVG Example"
                class="position-absolute top-50 start-50 translate-middle d-none d-md-block"
                style="width:300px; height:150px;">

        </section>
    </div>
@endsection