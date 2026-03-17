@extends('rpm_layout.app')

@section('title', 'Salvage Cars')

@section('content')

    <!-- Hero Large Section -->
    <div class="d-none d-lg-block">
        <div class="container-fluid d-flex justify-content-between py-3  mt-4 lgpad">
            <div>
                <div>
                    <h5 class="card-title mb-1 fw-bold" style="font-size: 22px;">2016 Porsche Panamera GTS</h5>
                </div>
                <div class="d-flex align-items-center">
                    <p class="badge rounded-1 text-dark m-0 mb-1" style="background-color: #e4e7ed; font-size: 10px;">
                        INSPECTED
                    </p>
                    <p class="card-text ms-2 mb-1">
                        V8 Power, AWD, Night Blue Metallic, Unmodified
                    </p>
                </div>
            </div>
            <div class="d-flex gap-2 align-items-center" style="font-size: 15px;">
                <div class="">
                    <a class="btn btn-sm mb-0 px-3 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#loginModal" href=""
                        style="background-color: #e4e7ed;"><i class="fa-regular fa-star me-1"></i>
                        Watch</a>
                </div>
                <div class="">
                    <a class="btn btn-sm mb-0 px-3 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#shareModal" href=""
                        style="background-color: #e4e7ed;"><i class="fa-solid fa-arrow-up-from-bracket me-1"></i>
                        Share</a>
                </div>
                <!-- Login Modal -->
                <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm"><!-- modal-sm for smaller width -->
                        <div class="modal-content text-center p-3">
                            <!-- Header -->
                            <div class="modal-header border-0 flex-column">
                                <!-- Centered icon -->
                                <button type="button" class="btn-close position-absolute end-0 top-0 m-3"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Body -->
                            <div class="modal-body">
                                <h4 class="modal-title w-100 fw-bold mb-3" id="loginModalLabel">Share This Car</h4>
                                <button class="btn btn-outline-secondary text-dark w-100 mb-3">
                                    Copy Link
                                </button>
                                <button class="btn btn-outline-secondary text-dark w-100 mb-3">
                                    FeedBack
                                </button>
                                <button class="btn btn-outline-secondary text-dark w-100 mb-3">
                                    Twitter
                                </button>
                                <button class="btn btn-outline-secondary text-dark w-100 mb-3">
                                    BlueSky
                                </button>
                                <button class="btn btn-outline-secondary text-dark w-100 mb-3">
                                    Email
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero Large Photos -->

    <a href="{{ route('drive') }}" class="text-decoration-none text-dark d-block mx-3 pe-5">
        <div class="container-fluid d-none d-lg-block lgpad">
            <div class="row g-0">
                <!-- Left Side (Main Image) -->
                <div class="col-lg-8 col-md-8">
                    <img src="{{asset('images/car1.jpg')}}" class="img-fluid w-100 h-100 rounded-start" alt="Car">
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row ps-2 g-2">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="{{asset('images/car1-2.jpg')}}" class="img-fluid mb-2" alt="">
                            <img src="{{asset('images/car1-3.jpg')}}" class="img-fluid mb-2" alt="">
                            <img src="{{asset('images/car1-4.jpg')}}" class="img-fluid mb-2" alt="">
                            <img src="{{asset('images/car1-5.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-2"><img src="{{asset('images/car1-6.jpg')}}" class="img-fluid rounded-top"
                                    style="border-top-right-radius: .375rem;" alt=""></div>
                            <div class="mb-2"><img src="{{asset('images/car1-7.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="mb-2"><img src="{{asset('images/car1-8.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="position-relative rounded-bottom-end" style="overflow: hidden;">
                                <div class="d-flex align-items-center justify-content-center text-white text-decoration-none gallery-img"
                                    style="background-image: url('{{asset('images/car1-8.jpg')}}'); background-size: cover; background-position: center;">
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75 rounded-bottom-end">
                                    </div>
                                    <span class="position-relative fw-bold" style="font-size: 20px;">
                                        All Photos (55)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>




    <!-- Hero Small Screen Photos -->
    <a href="{{ route('drive') }}" class="text-decoration-none text-dark d-block mx-3 pe-5">
        <div class="container-fluid d-block d-lg-none no-scroll-shadow">
            <div class="row flex-nowrap g-0 mt-3 gallery-row">
                <div class="col-6">
                    <div style="height: 199px;">
                        <img src="{{asset('images/car1.jpg')}}" class="img-fluid w-100 h-100 rounded-start"
                            style="object-fit: cover;" alt="Main Car">
                    </div>
                </div>
                <div class="col-6">
                    <div class="row ps-1 g-1">
                        <div class="col-4">
                            <img src="{{asset('images/car1-2.jpg')}}" class="img-fluid mb-1"
                                style="height: 97px; object-fit: cover;" alt="Thumbnail 1">
                        </div>
                        <div class="col-4">
                            <img src="{{asset('images/car1-3.jpg')}}" class="img-fluid mb-1"
                                style="height: 97px; object-fit: cover;" alt="Thumbnail 2">
                        </div>
                        <div class="col-4">
                            <img src="{{asset('images/car1-5.jpg')}}" class="img-fluid mb-1 rounded-top-end"
                                style="height: 97px; object-fit: cover;" alt="Thumbnail 3">
                        </div>
                    </div>

                    <div class="row ps-1 g-1">
                        <div class="col-4">
                            <img src="{{asset('images/car1-6.jpg')}}" class="img-fluid mb-1"
                                style="height: 97px; object-fit: cover;" alt="Thumbnail 4">
                        </div>
                        <div class="col-4">
                            <img src="{{asset('images/car1-7.jpg')}}" class="img-fluid mb-1"
                                style="height: 97px; object-fit: cover;" alt="Thumbnail 5">
                        </div>
                        <div class="col-4">
                            <div class="position-relative overflow-hidden rounded-bottom-end" style="height: 97px;">
                                <div class="d-flex align-items-center justify-content-center text-white text-decoration-none w-100 h-100"
                                    style="background-image: url('{{asset('images/car1-8.jpg')}}'); background-size: cover; background-position: center;">
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75 rounded-bottom-end">
                                    </div>
                                    <span class="position-relative fw-bold" style="font-size: 12px;">
                                        All Photos (55)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <!-- Table and Card Section -->

    <div class="container-fluid mx-3 pe-5">

        <div class="row lgpad">
            <div class="col-lg-8 col-md-12 col-sm-12 px-0">
                <div class="d-none d-lg-block position-sticky top-0" style="font-size: 18px; z-index: 1030;">
                    <div class="d-flex justify-content-between align-items-center bg-white py-2">
                        <div class="d-flex justify-content-around bg-dark py-2 text-white rounded flex-grow-1 me-2">
                            <div>
                                <span style="color: gainsboro;">
                                    <i class="fa-regular fa-clock"></i> Time Left:
                                </span>
                                <span id="countdown" class="fw-bold">00:00:00</span>
                            </div>
                            <div><span style="color: gainsboro;"> High Bid:</span> <span class="fw-bold">$17,000</span>
                            </div>
                            <div><span style="color: gainsboro;"> Bids:</span> <span class="fw-bold">7</span></div>
                            <div><span style="color: gainsboro;"> Comments:</span> <span class="fw-bold">7</span></div>
                        </div>
                        <a href="#" class="btn btn-success rounded px-3 py-2" style="font-size: 16px;"
                            data-bs-toggle="modal" data-bs-target="#loginModal">
                            Place Bid
                        </a>
                    </div>
                </div>

                <!-- Login Modal -->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal"><!-- modal-sm for smaller width -->
                        <div class="modal-content text-center p-3">
                            <div class="modal-header mb-0 pb-0 border-0 flex-column">
                                <img src="{{asset('images/move-car-icon.png')}}" class="img-fluid" alt="car"
                                    style="height: 40px;"> <!-- Centered icon -->
                                <button type="button" class="btn-close position-absolute end-0 top-0 m-3"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body mt-0">
                                <h5 class="modal-title w-100 fw-bold mb-2" id="loginModalLabel">Sign up</h5>
                                <p style="font-size: 15px;">Already have an account? <a href="#"
                                        class="text-decoration-none" style="color: #3db07a;">Sign in here</a></p>
                                <button class="btn btn-outline-secondary text-dark w-100 mb-3">
                                    <i class="fa-brands fa-google me-2 pt-1 fs-5"></i> Continue with Google
                                </button>
                                <button class="btn btn-primary w-100 ps-4 mb-3">
                                    <i class="fa-brands fa-facebook me-2 pt-1 fs-4"></i> Continue with Facebook
                                </button>
                                <button class="btn btn-dark w-100 mb-3">
                                    <i class="fa-brands fa-apple me-2 pt-1 fs-4"></i> Continue with Apple
                                </button>
                                <div class="d-flex align-items-center my-2">
                                    <hr class="flex-grow-1">
                                    <span class="mx-2">or</span>
                                    <hr class="flex-grow-1">
                                </div>
                                <div class="mb-3 text-start">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" class="form-control">
                                </div>

                                <button class="btn btn-success w-100">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-3 px-0 d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <div class="p-2 rounded" style="background-color: #f1f3f4;">
                            <a href=""><img src="{{asset('images/crafts.png')}}" alt="" style="height: 22px;"> </a>
                        </div>
                        <div class="rounded ms-2">
                            <a href="#" class="text-decoration-none text-dark bg-light px-3 py-2 rounded fw-bold"
                                style="font-size: 16px; background-color: #f1f3f4;">Inspection
                                <span class="text-dark"><i class="fa-regular fa-circle-check"></i></span> </a>
                        </div>
                    </div>
                    <div>
                        <p class="mt-2 mb-3 text-muted">
                            Ending September 19th at 11:05 PM
                        </p>
                    </div>
                </div>


                <div class="d-block d-lg-none">
                    <div class="container-fluid pb-3 px-0">
                        <div>
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <p class="card-title mb-0 fw-bold me-2 mb-0" style="font-size: 20px;">
                                    2023 Volvo V60 Recharge T8 Polestar Engineered
                                </P>
                                <i class="fa-regular fa-star" style="font-size: 18px;"></i>
                            </div>
                            <div class="mt-1 w-100">
                                <p class="card-text mb-0" style="font-size: 15px;">
                                    <span class="badge text-dark rounded-1"
                                        style="background-color: #e4e7ed; font-size: 10px;">
                                        NO REVERSE </span> 455-hp Plug-In Hybrid Powertrain, AWD, Mostly Unmodified
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-block d-lg-none">
                    <div class="d-flex align-items-center gap-2 mb-3 text-center">
                        <div class="flex-fill d-flex justify-content-center align-items-center px-2 py-2 rounded"
                            style="background-color:#e4e7ed; min-height:40px;">
                            <a href="#" class="d-block w-100">
                                <img src="{{asset('images/crafts.png')}}" class="img-fluid" alt="Crafts"
                                    style="height:22px;">
                            </a>
                        </div>
                        <a class="btn flex-fill fw-bold d-flex justify-content-center align-items-center"
                            style="font-size:14px; background-color:#e4e7ed; border:none; box-shadow:none; min-height:40px; white-space:nowrap;">
                            Inspection <i class="fa-regular fa-circle-check ms-1"></i>
                        </a>
                        <a class="btn flex-fill fw-bold d-flex justify-content-center align-items-center"
                            style="font-size:14px; background-color:#e4e7ed; border:none; box-shadow:none; min-height:40px; white-space:nowrap;">
                            Share <i class="fa-solid fa-arrow-up-from-bracket ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="d-block d-lg-none">
                    <nav class="d-flex overflow-auto mb-3 no-scroll-shadow" style="font-size: 12px;">
                        <ul class="list-unstyled d-flex m-0 p-0">
                            <li class="d-flex align-items-center">
                                <a href="#" class="text-muted text-decoration-none">Auction</a>
                                <span class="mx-2">&gt;</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="text-muted text-decoration-none">Automatic</a>
                                <span class="mx-2">&gt;</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="text-muted text-decoration-none">Porsche</a>
                                <span class="mx-2">&gt;</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="text-muted text-decoration-none">Panamera</a>
                                <span class="mx-2">&gt;</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="text-muted text-decoration-none">2016</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="d-none d-lg-block">
                    <table class="table table-bordered align-middle" style="font-size: 15px;">
                        <tbody>
                            <tr>
                                <th class="bg-light">Make</th>
                                <td><a href="#" class="text-dark">Porsche</a></td>
                                <th class="bg-light">Engine</th>
                                <td>4.8L V8</td>
                            </tr>
                            <tr>
                                <th class="bg-light">Model</th>
                                <td><a href="#" class="text-dark">Panamera</a></td>
                                <th class="bg-light">Drivetrain</th>
                                <td>4WD/AWD</td>
                            </tr>
                            <tr>
                                <th class="bg-light">Mileage</th>
                                <td>113,500</td>
                                <th class="bg-light">Transmission</th>
                                <td>Automatic (7-Speed)</td>
                            </tr>
                            <tr>
                                <th class="bg-light">VIN</th>
                                <td>WPOAF2A73GL081787</td>
                                <th class="bg-light">Body Style</th>
                                <td>Sedan</td>
                            </tr>
                            <tr>
                                <th class="bg-light">Title Status</th>
                                <td>Clean (MI)</td>
                                <th class="bg-light">Exterior Color</th>
                                <td>Night Blue Metallic</td>
                            </tr>
                            <tr>
                                <th class="bg-light">Location</th>
                                <td><a href="#" class="text-dark">Warren, MI 48092</a></td>
                                <th class="bg-light">Interior Color</th>
                                <td>Black</td>
                            </tr>
                            <tr>
                                <th class="bg-light">Seller</th>
                                <td><a href="https://carsandbids.com/user/nadir123"
                                        class="text-dark text-decoration-none fw-bold"><span><img
                                                src="{{asset('images/id-icon.png')}}" alt="" style="height: 20px;"></span>
                                        nadir123</a> <a href="#" class="text-danger bg-light p-1 text-small ms-2 rounded">
                                        Contact</a>
                                </td>
                                <th class="bg-light">Seller Type</th>
                                <td>Private Party</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-block d-lg-none">
                    <table class="table table-bordered align-middle" style="font-size: 15px;">
                        <tbody>
                            <tr>
                                <th class="">Make</th>
                                <td><a href="#" class="text-dark">Porsche</a></td>
                            </tr>
                            <tr>
                                <th class="">Engine</th>
                                <td>4.8L V8</td>
                            </tr>

                            <tr>
                                <th class="">Model</th>
                                <td><a href="#" class="text-dark">Panamera</a></td>
                            </tr>
                            <tr>
                                <th class="">Drivetrain</th>
                                <td>4WD/AWD</td>
                            </tr>
                            <tr>
                                <th class="">Mileage</th>
                                <td>113,500</td>
                            </tr>
                            <tr>
                                <th class="">Transmission</th>
                                <td>Automatic (7-Speed)</td>
                            </tr>
                            <tr>
                                <th class="">VIN</th>
                                <td>WPOAF2A73GL081787</td>
                            </tr>
                            <tr>
                                <th class="">Body Style</th>
                                <td>Sedan</td>
                            </tr>
                            <tr>
                                <th class="">Title Status</th>
                                <td>Clean (MI)</td>
                            </tr>
                            <tr>
                                <th class="">Exterior Color</th>
                                <td>Night Blue Metallic</td>
                            </tr>
                            <tr>
                                <th class="">Location</th>
                                <td><a href="#" class="text-dark">Warren, MI 48092</a></td>
                            </tr>
                            <tr>
                                <th class="">Interior Color</th>
                                <td>Black</td>
                            </tr>
                            <tr>
                                <th class="">Seller</th>
                                <td><a href="https://carsandbids.com/user/nadir123"
                                        class="text-dark text-decoration-none fw-bold"><span><img
                                                src="{{asset('images/id-icon.png')}}" alt="" style="height: 20px;"></span>
                                        nadir123</a> <a href="#" class="text-danger bg-light p-1 text-small ms-2 rounded">
                                        Contact</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="">Seller Type</th>
                                <td>Private Party</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <!-- Doug's Take -->
                <div class="" style="background-color:#F6F0FA;">
                    <div class="rounded py-3" style="background-image: url('{{asset('images/Group-arrow.png')}}');">
                        <div class="d-flex align-items-center px-3">
                            <img src="{{asset('images/person.png')}}" alt="" style="height: 35px;">
                            <p class="mb-0 ms-3 fw-bold" style="font-size: 20px;">Doug's Take</p>
                        </div>
                        <p class="px-3 pt-3">The original Porsche Panamera is an excellent performance car – and the GTS
                            model is especially
                            appealing, as it offers a 440-horsepower V8 and all-wheel drive. This particular example is
                            finished in handsome Night Blue Metallic, and it features some nice factory equipment like
                            the
                            Premium Package Plus, 20-inch wheels, and leather upholstery. It's also unmodified, which is
                            a
                            nice benefit – and it comes with a recent Lemon Squad pre-purchase inspection, for added
                            buyer
                            confidence.</p>
                    </div>
                </div>

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Highlights</h4>
                    <p>THIS… is a 2016 Porsche Panamera GTS, finished in Night Blue Metallic with a black interior.</p>

                    <ul class="ps-3">
                        <li>The attached <span class="text-danger">Carfax</span> history report shows no mileage
                            discrepancies in this Panamera’s past.
                        </li>
                        <li>According to the Monroney Label provided in the gallery, notable factory equipment includes
                            the Premium Package Plus, 20-inch 911 Turbo Design wheels, a rear spoiler, leather
                            upholstery, and ventilated front seats. The seller reports no notable modifications.</li>
                        <li>The Panamera GTS was introduced as a performance-oriented variant of the Panamera lineup in
                            2013. It featured a more powerful engine, sportier suspension tuning, and unique interior
                            and exterior styling cues. Despite its size and luxury, the Panamera GTS offers a sporty
                            driving experience that is characteristic of the Porsche brand.</li>
                        <li>Power comes from a 4.8-liter V8, rated at 440 horsepower and 384 lb-ft of torque. Output is
                            sent to all four wheels via a 7-speed PDK dual-clutch automatic transmission.</li>
                    </ul>
                </div>


                <!-- Equipment -->

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Equipment</h4>
                    <p>A Monroney Label is provided in the photo gallery, and a partial list of notable equipment
                        includes:</p>

                    <ul class="ps-3">
                        <li>Premium Package Plus (4-zone climate control, heated front and rear seats, ParkAssist, Lane
                            Change Assist)
                        </li>
                        <li>20-inch 911 Turbo Design wheels</li>
                        <li>Rear spoiler</li>
                        <li>Leather upholstery</li>
                        <li>Ventilated front seats</li>
                        <li>Sport Chrono dial and instrument dials in white</li>
                    </ul>
                </div>


                <!-- >Known Flaws -->

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Known Flaws</h4>
                    <p>A Lemon Squad pre-purchase inspection is included with this listing. The following flaws are
                        additionally pictured in the gallery:</p>

                    <ul class="ps-3">
                        <li>Chips and scratches around the exterior
                        </li>
                        <li>Curb rash on wheels</li>
                        <li>Rear spoiler</li>
                        <li>Wear on seats and some interior touch points</li>
                        <li>Some rust on underbody</li>
                    </ul>
                    <a href="#" class="text-danger text-decoration-none">View inspection report</a>

                </div>


                <!-- Recent Service History -->

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Recent Service History</h4>
                    <p>Service documentation in the gallery shows the following services have been performed:</p>

                    <ul class="ps-3">
                        <li>April 2025 (112,245 miles): Rear passenger parking brake actuator and shoes replaced
                        </li>
                        <li>February 2025 (111,953 miles): Engine oil and filter changed</li>
                    </ul>

                    <p>
                        The attached<span class="text-danger">Carfax</span> history report shows that the following
                        services have been performed:
                    </p>
                    <ul class="ps-3">
                        <li>March 2023 (101,848 miles): Engine oil and filter changed</li>
                        <li>October 2022: Tire(s) mounted and balanced</li>
                        <li>September 2022 (98,290 miles): Front and rear brake pads and pad sensor(s) replaced</li>
                        <li>April 2022 (91,971 miles): Engine oil and filter changed</li>
                        <li>September 2021: Glass repaired</li>
                        <li>May 2021 (79,676 miles): 2 tires mounted and balanced, 4 wheel alignment performed</li>
                        <li>November 2020 (66,708 miles): Brake fluid flushed</li>
                    </ul>
                    <p> Additional service history is detailed in the attached <span class="text-danger">Carfax</span>
                        report.</p>
                </div>

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Other Items Included in Sale</h4>
                    <ul class="ps-3">
                        <li>1 key</li>
                    </ul>
                </div>

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Ownership History</h4>
                    <p>The seller reports that they purchased this Panamera in June 2024 and have added approximately
                        3,000 miles since.</p>
                </div>

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Seller Notes</h4>
                    <p>The seller reports that factory paint protection film is applied to the hood, side mirrors, and
                        some side moldings.</p>
                </div>


                <!-- Video Section -->

                <div class="my-4">
                    <h4 class="mb-3 fw-bold">Video</h4>
                    <div class="container-fluid">
                        <div class="row g-3">

                            <!-- Video box 1 -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="ratio ratio-16x9 position-relative border overflow-hidden">
                                    <video class="myVideo w-100 h-100" controlslist="nodownload">
                                        <source src="{{ asset('videos/videoplayback.mp4') }}" type="video/mp4">
                                        <source src="{{ asset('videos/videoplayback.webm') }}" type="video/webm">
                                        Your browser does not support the video tag.
                                    </video>
                                    <!-- Blur + Play Button -->
                                    <div class="playOverlay position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center"
                                        style="cursor:pointer;">
                                        <button
                                            class="btn btn-light rounded-circle shadow d-flex align-items-center justify-content-center"
                                            style="width:60px; height:60px; font-size:24px; opacity:0.9;">
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Video box 2 -->
                             <div class="col-12 col-md-6 col-lg-6">
                                <div class="ratio ratio-16x9 position-relative border overflow-hidden">
                                    <video class="myVideo w-100 h-100" controlslist="nodownload">
                                        <source src="{{ asset('videos/videoplayback2.mp4') }}" type="video/mp4">
                                        <source src="{{ asset('videos/videoplayback2.mp4') }}" type="video/webm">
                                        Your browser does not support the video tag.
                                    </video>
                                    <!-- Blur + Play Button -->
                                    <div class="playOverlay position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center"
                                        style="cursor:pointer;">
                                        <button
                                            class="btn btn-light rounded-circle shadow d-flex align-items-center justify-content-center"
                                            style="width:60px; height:60px; font-size:24px; opacity:0.9;">
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Video box 3 -->
                             <div class="col-12 col-md-6 col-lg-6">
                                <div class="ratio ratio-16x9 position-relative border overflow-hidden">
                                    <video class="myVideo w-100 h-100" controlslist="nodownload">
                                        <source src="{{ asset('videos/videoplayback1.mp4') }}" type="video/mp4">
                                        <source src="{{ asset('videos/videoplayback1.mp4') }}" type="video/webm">
                                        Your browser does not support the video tag.
                                    </video>
                                    <!-- Blur + Play Button -->
                                    <div class="playOverlay position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center"
                                        style="cursor:pointer;">
                                        <button
                                            class="btn btn-light rounded-circle shadow d-flex align-items-center justify-content-center"
                                            style="width:60px; height:60px; font-size:24px; opacity:0.9;">
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="my-4 border rounded" style="font-size: 12px; background-color: #FFC7D3;">
                    <p class="p-3 m-0">All Cars & Bids auction listings are written based on information provided by the
                        seller during
                        the submission process, and have been reviewed by the seller for accuracy to the best of their
                        abilities. However, it is ultimately the <b>bidder's responsibility</b> to perform all due
                        diligence
                        <b> prior to placing a bid on any auction,</b> including but not limited to factual content,
                        flaws,
                        legality of registering in any given state, emissions/safety compliance, and import eligibility.
                        Please with any specific questions or requests.
                    </p>
                </div>


                <!-- Safe Pay -->

                <div class="border rounded text-white my-3 py-3"
                    style="background-image: url('{{asset('images/Image+Background.png')}}'); background-position:  center;">
                    <div class="row px-2">
                        <!-- Logo Column -->
                        <div class="col-auto">
                            <img src="{{asset('images/apple-touch-logo.png')}}" class="rounded-5" alt=""
                                style="height: 35px;">
                        </div>

                        <!-- Text Column -->
                        <div class="col ps-0">
                            <p class="mb-0 fw-bold" style="font-size: 20px;">Safe Pay</p>
                            <p class="pt-2 mb-0">
                                This car is eligible for Cars & Bids SafePay, powered by KeySavvy.
                                SafePay is the easiest, safest, and most efficient way to complete your purchase – 100%
                                online!
                                <a href="#" class="text-decoration-none">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Seller Q&A Header -->

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Seller Q&amp;A <span class="text-muted">(1)</span></h4>
                    <!-- View All: only visible on large and above -->
                    <a href="#" class="text-success small text-decoration-none d-none d-lg-block">View all</a>
                </div>

                <!-- Q&A Card -->
                <div class="row g-0 my-3">
                    <!-- Left Column -->
                    <div class="col-12 col-md-6 border rounded p-3">
                        <!-- Comment 1 -->
                        <div class="mb-3">
                            <div class="d-flex align-items-center" style="font-size: 14px;">
                                <strong>DC5Star</strong>
                                <i class="bi bi-patch-check ms-1"></i>
                                <small class="text-muted ms-2">42.9k <i class="fa-solid fa-arrow-up text-muted"></i></small>
                                <small class="text-muted ms-2">24m</small>
                            </div>
                            <p class="mb-1">Definitely a nice example!!</p>
                        </div>

                        <!-- Comment 2 -->
                        <div>
                            <div class="d-flex align-items-center" style="font-size: 14px;">
                                <strong>DC5Star</strong>
                                <i class="bi bi-patch-check ms-1"></i>
                                <small class="text-muted ms-2">42.9k <i class="fa-solid fa-arrow-up text-muted"></i></small>
                                <small class="text-muted ms-2">24m</small>
                            </div>
                            <p class="mb-1">Definitely a nice example!!</p>
                        </div>
                    </div>
                    <!-- View All: only visible on small & medium screens -->
                    <div class="text-end mt-2 d-block d-lg-none">
                        <a href="#" class="text-success small text-decoration-none">View all</a>
                    </div>

                    <!-- Right Column -->
                    <div class="col-12 col-md-6 d-none d-md-block">
                        <!-- Right content here -->
                    </div>
                </div>



                <h4 class="fw-bold mt-4">2016 Porsche Panamera GTS Reserve</h4>

                <!-- Auction Info -->
                <div class="row border rounded g-0 pt-3 d-none d-lg-flex">
                    <!-- Current Bid -->
                    <div class="col-md-6 ps-3">
                        <div>
                            <h6 class="">Current Bid</h6>
                            <p class="fw-bold" style="font-size: 60px;">$17,000</p>
                        </div>
                    </div>

                    <!-- Seller Info Large & XL Screen -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-5">
                                <p class="mb-1 fw-bold">Seller</p>
                                <p class="mb-1 fw-bold">Ending</p>
                                <p class="mb-1 fw-bold">Bids</p>
                                <p class="mb-1 fw-bold">Views</p>
                                <p class="mb-1 fw-bold">Watching</p>
                            </div>
                            <div class="col-7">
                                <p class="mb-1 fw-bold">
                                    <img src="{{asset('images/id-icon.png')}}" alt="" class="me-1" style="height: 20px;">
                                    nadir123
                                </p>
                                <p class="mb-1"><i class="fa-regular fa-calendar me-1"></i> Fri, Sep 19 11:05 PM</p>
                                <p class="mb-1"><i class="fa-solid fa-hashtag me-1"></i>7</p>
                                <p class="mb-1"><i class="fa-regular fa-eye me-1"></i> 6,293</p>
                                <p class="mb-1"><i class="fa-regular fa-star me-1"></i>599</p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Seller Info Small Screen -->
                <div class="d-block d-lg-none">
                    <div class="row my-3 d-flex" style="font-size: 15px;">
                        <div class="col-4">
                            <p class="mb-1 fw-bold">Seller</p>
                            <p class="mb-1 fw-bold">Ending</p>
                            <p class="mb-1 fw-bold">Bids</p>
                            <p class="mb-1 fw-bold">Views</p>
                            <p class="mb-1 fw-bold">Watching</p>
                        </div>

                        <div class="col-8">
                            <p class="mb-1 fw-bold">
                                <img src="{{asset('images/id-icon.png')}}" alt="" class="me-1" style="height: 20px;">
                                nadir123
                            </p>
                            <p class="mb-1"><i class="fa-regular fa-calendar me-1"></i> Fri, Sep 19 11:05 PM</p>
                            <p class="mb-1"><i class="fa-solid fa-hashtag me-1"></i>7</p>
                            <p class="mb-1"><i class="fa-regular fa-eye me-1"></i> 6,293</p>
                            <p class="mb-1"><i class="fa-regular fa-star me-1"></i>599</p>
                        </div>
                    </div>
                </div>



                <div class="my-3 bg-light rounded border w-100" style="font-size: 15px;">
                    <p class="mb-0 p-2"><i class="fa-regular fa-user"></i> Follow <a href="#" class="text-dark">nadir123</a>
                        to get
                        notified of their future auctions</p>
                </div>


                <!-- Comments Section -->

                <div class="my-4 px-0">
                    <div class="d-flex justify-content-between align-items-center pb-2 mb-2" style="font-size: 14px;">
                        <h5 class="mb-0">Comments & Bids</h5>

                        <nav class="d-flex align-items-center">
                            <!-- Always visible Newest -->
                            <a href="#" class="text-dark text-decoration-none fw-bold me-3"
                                style="font-size: 14px;">Newest</a>

                            <!-- Dropdown toggle (md & smaller) -->
                            <div class="dropdown d-md-block d-lg-none">
                                <a class="text-muted text-decoration-none dropdown-toggle" href="#" id="navToggle"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navToggle">
                                    <li><a class="dropdown-item text-muted" href="#">Most Upvoted</a></li>
                                    <li><a class="dropdown-item text-muted" href="#">Seller Comments</a></li>
                                    <li><a class="dropdown-item text-muted" href="#">Bid History</a></li>
                                </ul>
                            </div>

                            <!-- Other links (lg & up) -->
                            <div class="d-none d-lg-flex">
                                <a href="#" class="text-muted text-decoration-none me-3">Most Upvoted</a>
                                <a href="#" class="text-muted text-decoration-none me-3">Seller Comments</a>
                                <a href="#" class="text-muted text-decoration-none">Bid History</a>
                            </div>
                        </nav>


                    </div>
                    <div class="mb-3 position-relative">
                        <input type="text" class="form-control py-2 pe-5" placeholder="Add a Comment...">
                        <span class="position-absolute top-50 end-0 translate-middle-y me-2 
                               bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px; color: gray;">
                            <i class="fa-solid fa-arrow-down"></i>
                        </span>
                    </div>
                </div>


                <!-- Comment Section -->

                <div class="container-fluid my-4 d-flex px-0">
                    <!-- Avatar -->
                    <div class="me-2">
                        <img src="{{asset('images/logo.ico')}}" class="rounded-circle" alt="user" style="height: 30px;">
                    </div>
                    <!-- Comment Body -->
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center" style="font-size: 14px;">
                            <strong>Cars&amp;Bids</strong>
                            <i class="bi bi-patch-check ms-1"></i>
                            <small class="text-muted ms-2">42.9k <i class="fa-solid fa-arrow-up text-muted"></i></small>
                            <span class="badge bg-warning text-dark ms-2">Staff</span>
                            <small class="text-muted ms-2">24m</small>
                        </div>
                        <p class="mb-1">
                            Thank you for participating, everyone! Unfortunately, we weren’t quite able to close the
                            gap on this auction,
                            but we will be in contact with the high bidder <a href="#" class="text-danger">@DC5Star</a>
                            (via email) and
                            the seller to make a deal!
                        </p>
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="#" class="me-2 text-decoration-none border rounded-5 px-1 text-muted"
                                style="font-size: 10px;">
                                <i class="fa-solid fa-arrow-up me-1"></i>0
                            </a>

                            <a href="#" class="me-2 text-decoration-none text-muted">
                                Reply <i class="bi bi-arrow-return-right ms-1"></i>
                            </a>

                            <!-- Mobile pr full width, md+ pr auto -->
                            <a href="#" class="text-decoration-none text-muted flex-basis-100 flex-md-grow-0 mt-1 mt-md-0">
                                Flag as inappropriate <i class="bi bi-flag ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Reserve Info -->
                <div class="bg-light border rounded p-2 my-4 align-items-center">
                    <span>Reserve not met, bid to $19,500</span>
                    <span class="text-muted float-end" style="font-size: 14px;">2 d</span>
                </div>


                <div class="container-fluid my-4 d-flex px-0">
                    <!-- Avatar -->
                    <div class="me-2">
                        <img src="{{asset('images/logo.ico')}}" class="rounded-circle" alt="user" style="height: 30px;">
                    </div>
                    <!-- Comment Body -->
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center" style="font-size: 14px;">
                            <strong>DC5Star</strong>
                            <i class="bi bi-patch-check ms-1"></i>
                            <small class="text-muted ms-2">42.9k <i class="fa-solid fa-arrow-up text-muted"></i></small>
                            <span class="badge bg-warning text-dark ms-2">Staff</span>
                            <small class="text-muted ms-2">24m</small>
                        </div>
                        <p class="mb-1">
                            Definitely a nice example!!
                        </p>
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="#" class="me-2 text-decoration-none border rounded-5 px-1 text-muted"
                                style="font-size: 10px;">
                                <i class="fa-solid fa-arrow-up me-1"></i>0
                            </a>

                            <a href="#" class="me-2 text-decoration-none text-muted">
                                Reply <i class="bi bi-arrow-return-right ms-1"></i>
                            </a>

                            <!-- Mobile pr full width, md+ pr auto -->
                            <a href="#" class="text-decoration-none text-muted flex-basis-100 flex-md-grow-0 mt-1 mt-md-0">
                                Flag as inappropriate <i class="bi bi-flag ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="container-fluid my-4 d-flex px-0">
                    <!-- Avatar -->
                    <div class="me-2">
                        <img src="{{asset('images/logo.ico')}}" class="rounded-circle" alt="user" style="height: 30px;">
                    </div>
                    <!-- Comment Body -->
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center" style="font-size: 14px;">
                            <strong>DC5Star</strong>
                            <i class="bi bi-patch-check ms-1"></i>
                            <small class="text-muted ms-2">42.9k <i class="fa-solid fa-arrow-up text-muted"></i></small>
                            <span class="badge bg-warning text-dark ms-2">Staff</span>
                            <small class="text-muted ms-2">24m</small>
                        </div>
                        <p class="mb-1">
                            Thank you. I appreciate your prompt response and honesty
                        </p>
                        <div class="d-flex align-items-center flex-wrap">
                            <a href="#" class="me-2 text-decoration-none border rounded-5 px-1 text-muted"
                                style="font-size: 10px;">
                                <i class="fa-solid fa-arrow-up me-1"></i>0
                            </a>

                            <a href="#" class="me-2 text-decoration-none text-muted">
                                Reply <i class="bi bi-arrow-return-right ms-1"></i>
                            </a>

                            <!-- Mobile pr full width, md+ pr auto -->
                            <a href="#" class="text-decoration-none text-muted flex-basis-100 flex-md-grow-0 mt-1 mt-md-0">
                                Flag as inappropriate <i class="bi bi-flag ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="container-fluid my-4 d-flex px-0">
                    <!-- Avatar -->
                    <div class="me-2">
                        <img src="{{asset('images/logo.ico')}}" class="rounded-circle" alt="user" style="height: 30px;">
                    </div>
                    <!-- Comment Body -->
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center" style="font-size: 14px;">
                            <strong>DC5Star</strong>
                            <i class="bi bi-patch-check ms-1"></i>
                            <small class="text-muted ms-2">42.9k <i class="fa-solid fa-arrow-up text-muted"></i></small>
                            <span class="badge bg-warning text-dark ms-2">Staff</span>
                            <small class="text-muted ms-2">24m</small>
                        </div>
                        <div class="my-2" style="font-size: 13px;">
                            <span class="bg-dark rounded text-white px-1 py-1">
                                <span class="fw-bold" style="color: grey;">Bid</span> $210,786
                            </span>
                        </div>


                        <div class="d-flex align-items-center flex-wrap">
                            <a href="#" class="me-2 text-decoration-none border rounded-5 px-1 text-muted"
                                style="font-size: 10px;">
                                <i class="fa-solid fa-arrow-up me-1"></i>0
                            </a>

                            <a href="#" class="me-2 text-decoration-none text-muted">
                                Reply <i class="bi bi-arrow-return-right ms-1"></i>
                            </a>

                            <!-- Mobile pr full width, md+ pr auto -->
                            <a href="#" class="text-decoration-none text-muted flex-basis-100 flex-md-grow-0 mt-1 mt-md-0">
                                Flag as inappropriate <i class="bi bi-flag ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>



            </div>


            <!-- Right Column: Auctions Ending Soon -->


            <div class="col-lg-4 pe-0 d-none d-lg-block">

                <h5 class="my-3">Auctions ending soon</h5>

                <div class="row mt-2">


                    <!-- Card 1 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">

                            <!-- Image -->
                            <img src="{{asset('images/car2.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <!-- Timer + Bid Box -->
                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 2 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <img src="{{asset('images/car3.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge text-dark m-0 mb-1"
                                        style="background-color: #e4e7ed; font-size: 10px;">INSPECTED</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 3 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <img src="{{asset('images/car4.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 10px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 4 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <img src="{{asset('images/car5.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 5 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">

                            <!-- Image -->
                            <img src="{{asset('images/car2.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <!-- Timer + Bid Box -->
                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 6 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <img src="{{asset('images/car3.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge text-dark m-0 mb-1"
                                        style="background-color: #e4e7ed; font-size: 10px;">INSPECTED</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 7 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <img src="{{asset('images/car4.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 10px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>


                    <!-- Card 8 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <img src="{{asset('images/car5.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                                alt="Porsche 911">

                            <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                                <span class="bg-dark rounded-start px-1 py-1">
                                    <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                                </span>
                                <span class="bg-dark rounded-end px-1 py-1">
                                    <span style="color: grey;">Bid</span> $210,786
                                </span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                            </div>

                            <!-- Full clickable link -->
                            <a href="{{ route('drive') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>


                <!-- Card 9 -->
                <div class="col-lg-12 col-xl-6">
                    <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                        <img src="{{asset('images/car3.jpg')}}" class="card-img-top rounded-0 h-100 w-100"
                            alt="Porsche 911">

                        <div class="d-flex text-white w-75 ms-2" style="font-size: 11px; margin-top: -30px;">
                            <span class="bg-dark rounded-start px-1 py-1">
                                <span style="color: gray;"><i class="fa-regular fa-clock"></i></span> 11:14:04
                            </span>
                            <span class="bg-dark rounded-end px-1 py-1">
                                <span style="color: grey;">Bid</span> $210,786
                            </span>
                        </div>

                        <div class="card-body px-0" style="font-size: 14px;">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="card-title">2026 Porsche 911 Carrera 4 GTS Coupe</h6>
                                <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="card-text small">
                                <span class="badge text-dark m-0 mb-1"
                                    style="background-color: #e4e7ed; font-size: 10px;">INSPECTED</span>
                                532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                <span class="text-muted">King Of Prussia, PA 19406</span>
                            </p>
                        </div>

                        <!-- Full clickable link -->
                        <a href="{{ route('drive') }}" class="stretched-link"></a>
                    </div>
                </div>




                <!-- New Listing -->

                <h5 class="my-3">New Listing</h5>

                <div class="row">

                    <!-- Card 1 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <div class="col-9">
                                    <img src="{{asset('images/ycar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/ycar2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/yacr3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">NEW</span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <div class="col-9">
                                    <img src="{{asset('images/bcar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/bacr2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/bcar3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">NEW</span>
                            </div>

                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex justify-content-between align-items-start">
                                    <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 9px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>


                    <!-- Card 3 -->

                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/ycar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/ycar2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/yacr3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>


                    <!-- Card 4 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/bcar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/bacr2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/bcar3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 9px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/ycar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/ycar2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/yacr3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>


                    <!-- Card 6 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/bcar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/bacr2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/bcar3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 9px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/ycar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/ycar2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/yacr3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>


                    <!-- Card 8 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/bcar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/bacr2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/bcar3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 9px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>


                    <!-- Card 9 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card custom-card border-0 rounded-0 mb-3 position-relative">
                            <div class="row g-1">
                                <!-- Left Side (Big Image) -->
                                <div class="col-9">
                                    <img src="{{asset('images/bcar1.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                        alt="Porsche 911" style="object-fit: cover;">
                                </div>

                                <!-- Right Side (Two Small Images with Gap) -->
                                <div class="col-3 d-flex flex-column gap-1">
                                    <div class="h-50">
                                        <img src="{{asset('images/bacr2.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                    <div class="h-50">
                                        <img src="{{asset('images/bcar3.jpg')}}" class="img-fluid rounded-0 w-100 h-100"
                                            alt="Porsche 911" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex text-white w-50 ms-2" style="font-size: 12px; margin-top: -25px;">
                                <span class="bg-primary badge rounded-2 px-2 py-1">
                                    NEW
                                </span>

                            </div>
                            <div class="card-body px-0" style="font-size: 14px;">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="card-title">2019 Porsche 911 GT3 RS Weissach</h6>
                                    </div>
                                    <span class="star-icon"><i class="fa-regular fa-star"></i></span>
                                </div>
                                <p class="card-text small">
                                    <span class="badge m-0 mb-1 bg-primary" style="font-size: 9px;">NO
                                        REVERSE</span>
                                    532-hp Hybrid Turbo Flat-6, AWD, Highly Equipped <br>
                                    <span class="text-muted">King Of Prussia, PA 19406</span>
                                </p>
                                <a href="{{ route('drive') }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
