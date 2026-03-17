<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{asset('images/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('images/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>@yield('title', 'RPM ACUTION')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Loader -->
    <!-- <div id="loader-wrapper"
        style="background-image: url('{{asset('images/pro-bg.png')}}'); background-repeat: no-repeat; background-size: cover; background-color: rgba(233, 222, 222, 1);">
        <div class="image-loader">
            <img src="{{asset('images/loaderimage.png')}}" alt="Logo">
            <span class="rotate-ring"></span>
        </div>
    </div> -->
    <!-- header -->
    @include('partials.navbar')

    @yield('content')
    <!-- Footer -->
    @include('partials.footer')


</body>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    //animation
    AOS.init({
        duration: 800,
        once: true,
        offset: 120
    });
    //open and close 
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            const symbol = header.querySelectorAll('span')[1];
            if (item.classList.contains('active')) {
                item.classList.remove('active');
                symbol.textContent = '+';
            } else {
                document.querySelectorAll('.accordion-item').forEach(i => {
                    i.classList.remove('active');
                    i.querySelectorAll('.accordion-header span')[1].textContent = '+';
                });
                item.classList.add('active');
                symbol.textContent = '−';
            }
        });
    });
    //Loader functionality
    document.addEventListener('DOMContentLoaded', function () {
        window.onload = function () {
            const loader = document.getElementById('loader-wrapper');
            if (loader) {
                console.log('Loader hidden');
                loader.style.display = 'none';
            } else {
                console.warn('Loader element not found!');
            }
        };
    });
    //Scroll top button
    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
    let scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
        if (scrollTop) {
            window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
    }
    scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    window.onbeforeunload = function () {
        window.scrollTo(100, 0);
    };
    window.addEventListener("pageshow", function (event) {
        if (event.persisted) {
            window.scrollTo(0, 0);
        }
    });
    window.addEventListener('load', function () {
        setTimeout(() => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }, 5);
    });
    //video
    document.addEventListener("DOMContentLoaded", function () {
        const videos = document.querySelectorAll(".myVideo");
        const overlays = document.querySelectorAll(".playOverlay");
        overlays.forEach((overlay, index) => {
            const video = videos[index];
            overlay.addEventListener("click", () => {
                videos.forEach((v, i) => {
                    if (!v.paused) {
                        v.pause();
                        v.currentTime = 0;
                        overlays[i].style.display = "flex";
                    }
                });

                video.play();
                overlay.style.display = "none";
            });
            video.addEventListener("ended", () => {
                overlay.style.display = "flex";
            });
        });
    });
    //top fixed
    document.addEventListener("DOMContentLoaded", function () {
        const topbar = document.querySelector(".sticky-topbar");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                topbar.classList.add("show");
            } else {
                topbar.classList.remove("show");
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(function () {
        var $steps = $(".carousel-vertical-indicators .step");

        function bindControls($owl) {
            $owl.on("changed.owl.carousel", function (e) {
                var index = e.item.index - e.relatedTarget._clones.length / 2;
                index = (index + e.item.count) % e.item.count;
                $steps.removeClass("active")
                    .filter("[data-index='" + index + "']").addClass("active");
            });

            $(".carousel-vertical-indicators .prev-btn").on("click", () => $owl.trigger("prev.owl.carousel"));
            $(".carousel-vertical-indicators .next-btn").on("click", () => $owl.trigger("next.owl.carousel"));
            $steps.on("click", function () { $owl.trigger("to.owl.carousel", [$(this).data("index"), ]); });
        }

        bindControls($("#hero-carousel-desktop").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            animateIn: 'slideInDown',
            animateOut: 'slideOutUp',
            smartSpeed: 800,
            dots: false,
            nav: false
        }));

        bindControls($("#hero-carousel-mobile").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            dots: false,
            nav: false
        }));
    });


</script>

</html>
<?php
?>
