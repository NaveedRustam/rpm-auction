<header>
    <nav class="navbar navbar-expand-md sticky-topbar navbar-light ">
        <div class="navbar-brand d-flex align-items-center justify-content-center"
            style="width:30px; min-width:30px; background-color: rgb(146, 41, 64);">
            <a href="#">
                <img src="{{ asset('images/logo22.png') }}" alt="Logo" class="img-fluid ms-4 ms-sm-2 ms-lg-5 ms-xl-5">
            </a>
        </div>
        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation" style="background-color: #ffffffff;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
            <div class="d-none d-lg-block ">
                <div
                    class="d-flex justify-content-end ps-3 px-lg-3 px-xl-0  py-2 me-0 me-sm-3 me-lg-5 me-xl-5 pe-0 pe-sm-3 pe-lg-5 pe-xl-5">
                    <div
                        class=" d-none d-sm-block me-0 me-sm-3 me-lg-5 me-xl-5 pe-0 pe-sm-3 pe-lg-5 pe-xl-5  align-items-center text-light ">
                        <i class="fa-solid fa-envelope  me-1 text-light"></i> info@example.com
                        <span class="mx-1">|</span>
                        <i class="fa-solid fa-headphones me-1text-light"></i> Customer support
                    </div>
                    <div
                        class="d-block d-sm-none me-5 me-sm-3 me-lg-5 me-xl-5 pe-0 pe-sm-3 pe-lg-5 pe-xl-  align-items-center text-light ">
                        <i class="fa-solid fa-envelope  me-1 text-light"></i> info@example.com <br>
                        <span class="mx-1">|</span>
                        <i class="fa-solid fa-headphones me-1text-light"></i>Customer support
                    </div>
                    <div
                        class=" align-items-center ps-5 me-sm-4 me-xl-5 pe-xl-5 ms-0 ms-sm-3 ms-lg-5 ms-xl-5 ps-0 ps-sm-3 ps-lg-5 ps-xl-5    ">
                        <a href="#" class="btn btn-sm rounded-pill btn-outline-light my-2 my-sm-0 me-md-4 me-lg-3">HOW
                            TO
                            BID</a>
                        <a href="#" class="btn btn-sm rounded-pill btn-outline-light me-3">SELL YOUR ITEM</a>
                        <a href="#" class="btn btn-sm text-light">
                            <i class="fa-solid fa-language text-light me-1"></i>Language
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none ">
                <div
                    class="d-flex justify-content-end ps-3 px-lg-3 px-xl-0  py-2 me-0 me-sm-0 me-lg-5 me-xl-5 pe-0 pe-sm-0 pe-lg-5 pe-xl-5">
                   <div class="collapse navbar-collapse mt-2  justify-content-around " id="navbarSupportedContent">
                                <form class="d-flex mx-lg-2 my-lg-0 justify-content-start me-2">
                                    <input class="form-control inputfrom rounded-0 rounded-start px-xl-5" type="search"
                                        placeholder="Search your product…">
                                    <button class="btn btn-dark rounded-0 rounded-end" type="submit">
                                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                                    </button>
                                </form>
                                <ul class="navbar-nav  mb-2 mb-lg-0 mx-lg-2  justify-content-end">
                                    <li class="nav-item "><a
                                            class="nav-link text-white  ms-md-4 ms-lg-5 {{ request()->routeIs('home') ? 'active' : '' }}"
                                            href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item "><a
                                            class="nav-link  text-white ms-md-4 ms-lg-5 {{ request()->routeIs('auctions') ? 'active' : '' }}"
                                            href="{{route('auctions')}}">Auctions</a>
                                    </li>
                                    <li class="nav-item  dropdown">
                                        <a class="nav-link text-white ms-md-4 ms-lg-5 dropdown-toggle {{ request()->routeIs('inventory') ? 'active' : '' }}"
                                            href="#" data-bs-toggle="dropdown">Inventory</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-white {{ request()->routeIs('salvage') ? 'active' : '' }} "
                                                    href="{{route('salvage')}}">Salvage Cars</a>
                                            </li>
                                            <li><a class="dropdown-item text-white {{ request()->routeIs('drive') ? 'active' : '' }}"
                                                    href="{{route('drive')}}">Run and Drive</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item "><a
                                            class="nav-link text-white ms-md-4 ms-lg-5 {{ request()->routeIs('about') ? 'active' : '' }}"
                                            href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item "><a
                                            class="nav-link text-white ms-md-4 ms-lg-5 {{ request()->routeIs('contact') ? 'active' : '' }}"
                                            href="{{route('contact')}}">Contact Us</a>
                                    </li>
                                    <div class=" ms-xl-5 ps-xl-5 ps-lg-5  justify-content-end ">
                                        <a href="{{route('login')}}" class="btn btn-dark text-white ">
                                            <i class="fa-solid fa-circle-user me-1"></i> My Account
                                        </a>
                                    </div>
                                </ul>
                            </div>
                </div>

            </div>
        </div>
    </nav>
    {{-- <div class="d-flex justify-content-between sticky-topbar ">

        <div class="d-flex align-items-center justify-content-center"
            style="width:50px; min-width:50px; background-color: rgb(146, 41, 64);">
            <a href="#">
                <img src="{{ asset('images/logo22.png') }}" alt="Logo" class="img-fluid ms-0 ms-sm-2 ms-lg-5 ms-xl-5">
            </a>
        </div>

        <div
            class="d-flex align-items-center ps-3 px-lg-3 px-xl-0  py-2 me-0 me-sm-3 me-lg-5 me-xl-5 pe-0 pe-sm-3 pe-lg-5 pe-xl-5">
            <div
                class=" d-none d-sm-block me-0 me-sm-3 me-lg-5 me-xl-5 pe-0 pe-sm-3 pe-lg-5 pe-xl-5  align-items-center text-light ">
                <i class="fa-solid fa-envelope  me-1 text-light"></i> info@example.com
                <span class="mx-1">|</span>
                <i class="fa-solid fa-headphones me-1" text-light></i> Customer support
            </div>
            <div
                class="d-block d-sm-none me-0 me-sm-3 me-lg-5 me-xl-5 pe-0 pe-sm-3 pe-lg-5 pe-xl-5  align-items-center text-light ">
                info@example.com
                <span class="mx-1">|</span>
                Customer support
            </div>
            <div
                class=" align-items-center ps-3 me-sm-4 me-xl-5 pe-xl-5 ms-0 ms-sm-3 ms-lg-5 ms-xl-5 ps-0 ps-sm-3 ps-lg-5 ps-xl-5    ">
                <a href="#" class="btn btn-sm rounded-pill btn-outline-light my-2 my-sm-0 me-md-4 me-lg-3">HOW TO
                    BID</a>
                <a href="#" class="btn btn-sm rounded-pill btn-outline-light me-3">SELL YOUR ITEM</a>
                <a href="#" class="btn btn-sm text-light">
                    <i class="fa-solid fa-language text-light me-1"></i>Language
                </a>
            </div>
        </div>
    </div> --}}
    <section class=" bg-white">

        <div class="container-fluid p-0">

            <div class="d-flex">
                <div class="d-flex align-items-center justify-content-center"
                    style="width:130px; min-width:130px; background-color: rgb(146, 41, 64);">
                    <a href="#">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="img-fluid p-2">
                    </a>
                </div>
                <div class="flex-grow-1">
                    <div
                        class="d-flex d-none d-md-flex d-lg-flex d-xl-flex  justify-content-between align-items-center px-lg-3 px-xl-0  py-2 border-bottom border-bottom-md-0">
                        <div class="d-none d-lg-flex d-sm-flex ms-sm-4 ms-xl-5 ps-xl-4 align-items-center ">
                            <i class="fa-solid fa-envelope me-1"></i> info@example.com
                            <span class="mx-2">|</span>
                            <i class="fa-solid fa-headphones me-1"></i> Customer support
                        </div>
                        <div class="d-none d-sm-flex d-lg-flex align-items-center me-sm-4 me-xl-5 pe-xl-5   ">
                            <a href="#" class="btn btn-sm rounded-pill btn-outline-dark me-md-4 me-lg-3">HOW TO BID</a>
                            <a href="#" class="btn btn-sm rounded-pill btn-outline-dark me-3">SELL YOUR ITEM</a>
                            <a href="#" class="btn btn-sm">
                                <i class="fa-solid fa-language me-1"></i>Language
                            </a>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class="container-fluid px-2 justify-content-end">
                            <button class="navbar-toggler mt-4" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse mt-2  justify-content-around " id="mainNav">
                                <form class="d-flex mx-lg-2 my-lg-0 justify-content-start">
                                    <input class="form-control inputfrom rounded-0 rounded-start px-xl-5" type="search"
                                        placeholder="Search your product…">
                                    <button class="btn rounded-0 rounded-end" type="submit"
                                        style="background-color: rgb(146, 41, 64);">
                                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                                    </button>
                                </form>
                                <ul class="navbar-nav  mb-2 mb-lg-0 mx-lg-2 justify-content-end">
                                    <li class="nav-item "><a
                                            class="nav-link  ms-md-4 ms-lg-5 {{ request()->routeIs('home') ? 'active' : '' }}"
                                            href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item "><a
                                            class="nav-link  ms-md-4 ms-lg-5 {{ request()->routeIs('auctions') ? 'active' : '' }}"
                                            href="{{route('auctions')}}">Auctions</a>
                                    </li>
                                    <li class="nav-item  dropdown">
                                        <a class="nav-link  ms-md-4 ms-lg-5 dropdown-toggle {{ request()->routeIs('inventory') ? 'active' : '' }}"
                                            href="#" data-bs-toggle="dropdown">Inventory</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item {{ request()->routeIs('salvage') ? 'active' : '' }} "
                                                    href="{{route('salvage')}}">Salvage Cars</a>
                                            </li>
                                            <li><a class="dropdown-item {{ request()->routeIs('drive') ? 'active' : '' }}"
                                                    href="{{route('drive')}}">Run and Drive</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item "><a
                                            class="nav-link  ms-md-4 ms-lg-5 {{ request()->routeIs('about') ? 'active' : '' }}"
                                            href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item "><a
                                            class="nav-link  ms-md-4 ms-lg-5 {{ request()->routeIs('contact') ? 'active' : '' }}"
                                            href="{{route('contact')}}">Contact Us</a>
                                    </li>
                                    <div class=" ms-xl-5 ps-xl-5 ps-lg-5  justify-content-end ">
                                        <a href="{{route('login')}}" class="btn btn-custom text-white ">
                                            <i class="fa-solid fa-circle-user me-1"></i> My Account
                                        </a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>
