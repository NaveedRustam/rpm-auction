@extends('rpm_layout.app')

@section('title', 'acutions')

@section('content')
    
   

    <!-- Large Screen carousel -->

    <div id="carCarousel" class="carousel slide mt-2 d-none d-lg-block" data-bs-ride="carousel" data-bs-interval="10000"
        style="height: 370px; padding: 0px 10px 10px;">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
                <a href="{{route('salvage')}}" class="text-decoration-none text-dark">
                    <div class="row g-1 h-100">
                        <div class="col-md-8 h-100">
                            <div class="card border-0 h-100">
                                <div class="position-relative h-100">
                                    <img src="{{asset('images/car1-5.jpg')}}" class="card-img-top h-100 w-100 rounded-0"
                                        style="object-fit: cover;" alt="Car">
                                    <span class="badge text-dark position-absolute top-0 start-0 m-2"
                                        style="background-color: #ffffff99;">
                                        FEATURED
                                    </span>
                                    <h5 class="card-title text-white position-absolute top-0 end-0 m-2 px-2 py-1"
                                        style="text-shadow: 1px 1px 3px rgba(0,0,0,0.7); font-size: 16px;">
                                        2019 Porsche 911 GT3 RS Weissach
                                    </h5>
                                    <div class="text-white fw-bold bg-dark rounded position-absolute bottom-0 start-0 m-2 px-2 py-1"
                                        style="font-size: 14px;">
                                        <span class="">
                                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 2 Days
                                        </span>
                                        <span class="ms-1">
                                            <span style="color: grey;">Bid</span> $210,786
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row g-1 h-100">
                                <div class="col-lg-6 d-flex flex-column">
                                    <img src="{{asset('images/car1-4.jpg')}}" class="img-fluid mb-1"
                                        style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                    <img src="{{asset('images/car1-1.jpg')}}" class="img-fluid mb-1"
                                        style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                    <div class="mb-1">
                                        <img src="{{asset('images/car1-6.jpg')}}" class="img-fluid"
                                            style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                    </div>
                                    <div class="mb-1">
                                        <img src="{{asset('images/car1-7.jpg')}}" class="img-fluid"
                                            style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item active h-100">
                <a href="{{route('salvage')}}" class="text-decoration-none text-dark">
                    <div class="row g-1 h-100">
                        <div class="col-md-8 h-100">
                            <div class="card border-0 h-100">
                                <div class="position-relative h-100">
                                    <img src="{{asset('images/ycar.jpg')}}" class="card-img-top h-100 w-100 rounded-0"
                                        style="object-fit: cover;" alt="Car">
                                    <span class="badge text-dark position-absolute top-0 start-0 m-2"
                                        style="background-color: #ffffff99;">
                                        FEATURED
                                    </span>
                                    <h5 class="card-title text-white position-absolute top-0 end-0 m-2 px-2 py-1"
                                        style="text-shadow: 1px 1px 3px rgba(0,0,0,0.7); font-size: 16px;">
                                        2019 Porsche 911 GT3 RS Weissach
                                    </h5>
                                    <div class="text-white fw-bold bg-dark rounded position-absolute bottom-0 start-0 m-2 px-2 py-1"
                                        style="font-size: 14px;">
                                        <span class="">
                                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 2 Days
                                        </span>
                                        <span class="ms-1">
                                            <span style="color: grey;">Bid</span> $210,786
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row g-1 h-100">
                                <div class="col-lg-6 d-flex flex-column">
                                    <img src="{{asset('images/ycar1.jpg')}}" class="img-fluid mb-1"
                                        style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                    <img src="{{asset('images/ycar2.jpg')}}" class="img-fluid mb-1"
                                        style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                    <div class="mb-1">
                                        <img src="{{asset('images/yacr3.jpg')}}" class="img-fluid"
                                            style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                    </div>
                                    <div class="mb-1">
                                        <img src="{{asset('images/ycar3.jpg')}}" class="img-fluid"
                                            style="object-fit: cover; width: 100%; height: 180px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev custom-control" type="button" data-bs-target="#carCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next custom-control" type="button" data-bs-target="#carCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>


    <!-- Large Screen mini Navbar -->

    <div class="container-fluid my-3 d-none d-lg-block lgpad">
        <div class="row">
            <div class="col-12 col-lg-12 col d-flex align-items-center m-0">
                <div>
                    <h1>Auctions</h1>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 d-flex flex-wrap gap-2">
                <div class="dropdown">
                    <button id="yearsBtn" class="btn btn-light border dropdown-toggle" type="button"
                        data-bs-toggle="dropdown">
                        Years
                    </button>
                    <ul class="dropdown-menu p-3" aria-labelledby="yearsBtn">
                        <div class="d-flex gap-2">
                            <select class="form-select w-50" id="fromYear" aria-label="From year">
                                <option disabled selected>From</option>
                            </select>
                            <span class="d-flex align-items-center">To</span>
                            <select class="form-select w-50" id="toYear" aria-label="To year">
                                <option disabled selected>To</option>
                            </select>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Transmission
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">Automatic</a></li>
                        <li><a class="dropdown-item" href="#">Manual</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Body Style
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">Coupe</a></li>
                        <li><a class="dropdown-item" href="#">SUV</a></li>
                        <li><a class="dropdown-item" href="#">Truck</a></li>
                        <li><a class="dropdown-item" href="#">Sedan</a></li>
                        <li><a class="dropdown-item" href="#">Wagon</a></li>
                        <li><a class="dropdown-item" href="#">Van</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <ul class="nav justify-content-xl-end" style="font-size: 14px;">
                    <li class="nav-item">
                        <a class="nav-link active border-bottom border-dark text-dark px-1" href="#">Ending soon</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-muted px-1" href="#">Newly listed</a></li>
                    <li class="nav-item"><a class="nav-link text-muted px-1" href="#">No reserve</a></li>
                    <li class="nav-item"><a class="nav-link text-muted px-1" href="#">Lowest mileage</a></li>
                    <li class="nav-item"><a class="nav-link text-muted px-1" href="#">Closest to me</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Main card Small Screen -->

    <div class="card custom-card border-0 rounded-0 mt-4 mb-3 position-relative d-block d-lg-none mswidth"
        style="padding: 0 10px 10px;">
        <div class="row mb-1">
            <div class="col-12">
                <img src="{{asset('images/mcar.jpg')}}" class="w-100 rounded-top-4 img-fluid hi180"
                    style="height:180px; object-fit:cover;" alt="Porsche 911">
            </div>
        </div>
        <div class="row g-1">
            <div class="col-8">
                <img src="{{asset('images/mcar1.jpg')}}" class="w-100 img-fluid rounded-bottom-start hi120"
                    style="height:120px; object-fit:cover;" alt="Porsche 911">
            </div>
            <div class="col-4">
                <div class="row g-1">
                    <div class="col-12">
                        <img src="{{asset('images/mcar3.jpg')}}" class="w-100 rounded-0 img-fluid hi59"
                            style="height:59px; object-fit:cover;" alt="Porsche 911">
                    </div>
                    <div class="col-12">
                        <img src="{{asset('images/mcar2.jpg')}}" class="w-100 rounded-0 img-fluid hi59 rounded-bottom-ends"
                            style="height:59px; object-fit:cover;" alt="Porsche 911">
                    </div>
                </div>
            </div>
        </div>
        <span class="text-dark badge rounded position-absolute top-0 end-0 me-4 mt-3" style="background-color: #ffffff99;">
            FEATURED
        </span>

        <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
            <span class="bg-dark rounded-start px-1 py-1">
                <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 2 Days
            </span>
            <span class="bg-dark rounded-end px-1 py-1">
                <span style="color: grey;">Bid</span> $210,786
            </span>
        </div>
        <div class="card-body px-0" style="font-size: 14px;">
            <div class="d-flex justify-content-between align-items-start">
                <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                <span><i class="fa-regular fa-star"></i></span>
            </div>
            <p class="card-text small">
                532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                <span class="text-muted">King Of Prussia, PA 19406</span>
            </p>
        </div>
        <a href="{{route('salvage')}}" class="stretched-link"></a>
    </div>
    <!-- Main card sections -->

    <div class="container-fluid my-3 lgpad">

        <div class="row">

            <!-- card -->
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded mb-3 position-relative">
                    <img src="{{asset('images/mcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <span class="text-dark badge rounded position-absolute top-0 end-0 m-2"
                        style="background-color: #ffffff99;">
                        FEATURED
                    </span>
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 2 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/vcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">

                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 4 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS </h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            <span class="badge rounded-1 text-white m-0 mb-1"
                                style="background-color: #5ca1ff; font-size: 10px;">INSPECTED</span>
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/bcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 3 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/ccar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <span class="text-dark badge rounded position-absolute top-0 end-0 m-2"
                        style="background-color: #ffffff99;">
                        FEATURED
                    </span>
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 2 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            <span class="badge rounded-1 text-white m-0 mb-1"
                                style="background-color: #5ca1ff; font-size: 10px;">INSPECTED</span>
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/mcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 3 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/vcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">

                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 4 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            <span class="badge rounded-1 text-white m-0 mb-1"
                                style="background-color: #5ca1ff; font-size: 10px;">INSPECTED</span>
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/bcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 1 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/ccar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">

                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 2 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            <span class="badge rounded-1 text-white m-0 mb-1"
                                style="background-color: #5ca1ff; font-size: 10px;">INSPECTED</span>
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/mcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 3 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('/images/vcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">

                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 1 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            <span class="badge rounded-1 text-white m-0 mb-1"
                                style="background-color: #5ca1ff; font-size: 10px;">INSPECTED</span>
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/bcar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">
                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 4 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="card border-0 rounded-0 mb-3 position-relative">
                    <img src="{{asset('images/ccar.jpg')}}" class="card-img-top rounded-3 h-100 w-100" alt="Porsche 911">

                    <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                        <span class="bg-dark rounded-start px-1 py-1">
                            <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 5 Days
                        </span>
                        <span class="bg-dark rounded-end px-1 py-1">
                            <span style="color: grey;">Bid</span> $210,786
                        </span>
                    </div>
                    <div class="card-body px-0" style="font-size: 14px;">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="card-title fw-semibold fs-5 mt-1">2026 Porsche 911 Carrera 4 GTS</h6>
                            <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                        </div>
                        <p class="card-text small">
                            <span class="badge rounded-1 text-white m-0 mb-1"
                                style="background-color: #5ca1ff; font-size: 10px;">INSPECTED</span>
                            532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                            <span class="text-muted">King Of Prussia, PA 19406</span>
                        </p>
                    </div>
                    <a href="{{route('salvage')}}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
@endsection