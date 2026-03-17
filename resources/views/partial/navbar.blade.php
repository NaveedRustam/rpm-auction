 <header>
            <!-- <div id="section-header_top">
            <div class="h__top bgbl pt__10 pb__10 fs__12 flex fl_center al_center" data-cur="cursor">
                <div class="container-fluid">
                    <div class="row al_center">
                        <div class="col-lg-4 col-12 col-md-12 ">
                            <div class="header-text mt-2 me-2" data-cur="cursor">
                                <i class="fa-thin fa-phone"></i>
                                03-111-555-725
                                &nbsp;|&nbsp; <i class="fa-brands fa-whatsapp"></i>
                                <a href="#" class="text-decoration-none" target="_blank"
                                    aria-label="Contact us via WhatsApp">0317-2929702</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 tc col-md-12" data-cur="cursor">
                            <div class="header-text mt-2" data-cur="cursor"><b><span class="fc__red"
                                        data-cur="cursor">Unveil
                                        PakStyle's Summer Collection
                                        2025</span>
                                    - <a href="#" class="text-decoration-none" title="Lawn Collection 2025">Shop
                                        Now!</a></b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img style="height: 50px;" src="{{asset('images/logo3.png')}}"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 ">
                            <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page"
                                   href="{{ route('home') }}">New Arrivels</a>
                            </li>

                            <li class="nav-item me-5">
                                <a class="nav-link"
                                    href="{{route('dresses')}}">Dresses</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link" href="{{route('summer')}}">Summer
                                    Collection</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link" href="{{route('winter')}}">Winter
                                    Collection</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
