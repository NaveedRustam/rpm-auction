@extends('rpm_layout.app')

@section('title', 'Run and Drive')

@section('content')
<body class="bg-black">


    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-black pt-2 mx-2">
        <div class="container-fluid justify-content-center justify-content-lg-start" style="font-size: 16px;">

            <button class="btn btn-dark text-white d-lg-none me-2 fw-bold" onclick="window.history.back();"
                style="border:none; background:transparent;">
                &larr;
            </button>

            <!-- All Photos (centered on small/medium, left on lg) -->
            <a class="navbar-brand mx-auto text-center text-lg-start" href="#" style="font-size: 16px;">All Photos (90)</a>

            <!-- Links (only show lg and up) -->
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarText">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Exterior</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Interior</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mechanical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Other</a>
                    </li>
                </ul>
            </div>

            <!-- Close button on the right (always visible) -->
            <button class="btn btn-dark text-white ms-auto" onclick="window.history.back();"
                style="border:none; background:transparent;">
                &times;
            </button>
        </div>
    </nav>
    <!-- All Photo Section -->
    <div class="container-fluid px-0 mt-3 ms-4 pe-5 mb-3">
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-5 g-2 lgpad">
            <div class="col">
                <img src="{{asset('images/car1.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-2.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-3.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-4.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-5.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-6.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-7.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-8.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-9.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-11.jpg')}}"class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-10.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-12.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-13.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-14.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-15.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-2.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-3.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-4.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-5.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-6.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-7.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-8.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-9.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-11.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-10.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-12.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-13.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-14.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-15.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-2.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-3.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-4.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-5.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-6.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-7.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-8.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-9.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-11.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-10.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-12.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-13.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-14.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-15.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-2.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-3.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-4.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-5.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-6.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-7.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-8.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-9.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-11.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-10.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-12.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>
            <div class="col">
                <img src="{{asset('images/car1-13.jpg')}}" class="img-fluid fixed-img" alt="">
            </div>











        </div>


    </div>

















































    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
@endsection