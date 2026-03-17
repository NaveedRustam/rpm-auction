@extends('rpm_layout.app')

@section('title', 'About Us')

@section('content')
    <section class="py-5 text-white position-relative"
        style="background: linear-gradient(rgba(35, 35, 35, 0.72), rgba(35, 35, 35, 0.82)), url('{{ asset('images/hero-bg2.jpg') }}') center/cover no-repeat;">
        <div class="container py-5" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge rounded-pill px-3 py-2 mb-3"
                        style="background-color: rgba(255, 199, 211, 0.2); color: #fff;">
                        RPM Auction You Can Trust
                    </span>
                    <h1 class="display-4 fw-bold mb-3">About RPM Auction</h1>
                    <p class="lead mb-4 text-white-50">
                        We connect buyers with quality auction inventory through a transparent bidding experience,
                        dependable support, and a growing selection of run and drive and salvage vehicles.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('auctions') }}" class="btn btn-custom px-4 py-2">Explore Auctions</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-2">Contact Our Team</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="p-4 rounded-4 shadow-lg"
                        style="background-color: rgba(255, 255, 255, 0.12); backdrop-filter: blur(4px);">
                        <h3 class="fw-semibold mb-3">What We Focus On</h3>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="rounded-3 h-100 p-3" style="background-color: rgba(255, 255, 255, 0.1);">
                                    <i class="fa-solid fa-gavel fs-4 mb-2"></i>
                                    <h6 class="fw-bold">Fair Bidding</h6>
                                    <p class="mb-0 text-white-50 small">Clear access to inventory and a straightforward auction flow.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="rounded-3 h-100 p-3" style="background-color: rgba(255, 255, 255, 0.1);">
                                    <i class="fa-solid fa-car-side fs-4 mb-2"></i>
                                    <h6 class="fw-bold">Vehicle Variety</h6>
                                    <p class="mb-0 text-white-50 small">Run and drive units plus salvage inventory in one place.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="rounded-3 h-100 p-3" style="background-color: rgba(255, 255, 255, 0.1);">
                                    <i class="fa-solid fa-headset fs-4 mb-2"></i>
                                    <h6 class="fw-bold">Support Team</h6>
                                    <p class="mb-0 text-white-50 small">Responsive guidance before, during, and after bidding.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="rounded-3 h-100 p-3" style="background-color: rgba(255, 255, 255, 0.1);">
                                    <i class="fa-solid fa-shield-halved fs-4 mb-2"></i>
                                    <h6 class="fw-bold">Trusted Process</h6>
                                    <p class="mb-0 text-white-50 small">A buyer-focused experience built around confidence and clarity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5"
        style="background-image: url('{{ asset('images/pro-bg.png') }}'); background-repeat: no-repeat; background-size: cover; background-color: #F6F0FA;">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="{{ asset('images/hero-bg1.jpg') }}" alt="RPM Auction inventory"
                        class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold small bt1">Who We Are</span>
                    <div class="mt-2 mb-3">
                        <h2 class="fw-semibold bt1 d-inline">Built to make online vehicle auctions</h2>
                        <h2 class="d-inline fst-italic ms-1 font1">simpler</h2>
                    </div>
                    <p class="text-muted mb-3">
                        RPM Auction is designed for buyers who want access to competitive vehicle inventory without
                        unnecessary friction. We aim to make the experience easier to understand, faster to act on,
                        and more reliable from first browse to final bid.
                    </p>
                    <p class="text-muted mb-4">
                        Whether a customer is looking for salvage cars, run and drive inventory, or simply a better way
                        to explore auction opportunities, our goal is to provide a platform backed by useful
                        information and dependable customer support.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="bg-white rounded-4 border h-100 p-3 shadow-sm">
                                <h5 class="fw-bold mb-2">Our Mission</h5>
                                <p class="text-muted mb-0 small">Create a smoother and more transparent auction experience for every buyer.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white rounded-4 border h-100 p-3 shadow-sm">
                                <h5 class="fw-bold mb-2">Our Vision</h5>
                                <p class="text-muted mb-0 small">Become a trusted destination for accessible online vehicle auctions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-semibold small bt1">Why Choose Us</span>
                <div class="mt-2">
                    <h2 class="fw-semibold bt1 d-inline">What makes RPM Auction</h2>
                    <h2 class="d-inline fst-italic ms-1 font1">different</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 p-4 shadow-sm border bg-white" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="mb-3 fs-2" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <h5 class="fw-bold">Structured Listings</h5>
                        <p class="text-muted mb-0">Inventory is organized so buyers can focus on the right vehicles faster.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 p-4 shadow-sm border bg-white" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="mb-3 fs-2" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h5 class="fw-bold">Faster Decisions</h5>
                        <p class="text-muted mb-0">Clear pages and direct navigation help buyers move from browsing to bidding quickly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 p-4 shadow-sm border bg-white" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="mb-3 fs-2" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h5 class="fw-bold">Customer Support</h5>
                        <p class="text-muted mb-0">Our team is positioned to help customers understand the next step at each stage.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="h-100 rounded-4 p-4 shadow-sm border bg-white" style="border-top: 3px solid rgb(146, 41, 64) !important;">
                        <div class="mb-3 fs-2" style="color: rgb(146, 41, 64);">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h5 class="fw-bold">Growing Platform</h5>
                        <p class="text-muted mb-0">We continue improving how buyers discover, compare, and act on live inventory.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #ffc7d3;">
        <div class="container" data-aos="fade-up">
            <div class="row g-4 text-center">
                <div class="col-6 col-lg-3">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                        <h2 class="fw-bold mb-1" style="color: rgb(146, 41, 64);">24/7</h2>
                        <p class="mb-0 text-muted">Site Access</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                        <h2 class="fw-bold mb-1" style="color: rgb(146, 41, 64);">2+</h2>
                        <p class="mb-0 text-muted">Inventory Types</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                        <h2 class="fw-bold mb-1" style="color: rgb(146, 41, 64);">100%</h2>
                        <p class="mb-0 text-muted">Buyer Focused</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                        <h2 class="fw-bold mb-1" style="color: rgb(146, 41, 64);">1</h2>
                        <p class="mb-0 text-muted">Trusted Auction Brand</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white"
        style="background: rgb(146, 41, 64) url('{{ asset('images/Group 2032.png') }}') center/cover no-repeat;">
        <div class="container py-lg-3" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Ready to explore inventory with RPM Auction?</h2>
                    <p class="mb-0 text-white-50">
                        Browse available auctions or contact our team if you want help getting started.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('auctions') }}" class="btn btn-custom px-4 py-2 me-2 mb-2 mb-lg-0">View Auctions</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-2">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection
