<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>Tsany | Home</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/favicon.svg" type="image/svg" />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lineicons.css" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/tiny-slider.css" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/glightbox.min.css" />

    <link rel="stylesheet" href="{{ asset('') }}/style.css" />

    @yield('css')
</head>

<body>

    <!--====== NAVBAR NINE PART START ======-->

    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('') }}">
                            <img src="{{ asset('galeri/' . $settings['logo']) }}" height="40px" alt="Logo" />
                            <!-- <h3 class="text-white">TA</h3> -->
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == null ? 'active' : '' }}" href="{{ url('') }}">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'tentang' ? 'active' : '' }}" href="{{ url('tentang') }}">Tentang</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'visi-misi' ? 'active' : '' }}" href="{{ url('visi-misi') }}">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'kotak-aspirasi' ? 'active' : '' }}" href="{{ url('kotak-aspirasi') }}">Kotak Aspirasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'warta' ? 'active' : '' }}" href="{{ url('warta') }}">Warta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'tim' ? 'active' : '' }}" href="{{ url('tim') }}">Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'lapak' ? 'active' : '' }}" href="{{ url('lapak') }}">Lapak SAKTI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $active == 'desa' ? 'active' : '' }}" href="{{ url('desa') }}">i-Desa</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== NAVBAR NINE PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->
    <!-- content -->
    </div>
    <div class="overlay-left"></div>

    <!--====== SIDEBAR PART ENDS ======-->

    <!--====== ABOUT FIVE PART START ======-->

    @yield('content')
    <!-- Start Footer Area -->
    <footer class="text-white py-3" style="background-color: var(--primary)">
        <div class="d-flex align-items-center justify-content-center">
            <h5 class="social-title text-white">Follow Us On</h5>
        </div>
        <ul class="d-flex justify-content-center">
            <li>
                <a href="{{ $settings['facebook'] }}"><i class="text-white mx-2 lni lni-facebook-filled"></i></a>
            </li>
            <li>
                <a href="{{ $settings['instagram'] }}"><i class="text-white mx-2 lni lni-instagram-original"></i></a>
            </li>
            <li>
                <a href="{{ $settings['linkedin'] }}"><i class="text-white mx-2 lni lni-linkedin-original"></i></a>
            </li>
            <li>
                <a href="https://wa.me/62{{ $settings['whatsapp'] }}"><i class="text-white mx-2 lni lni-whatsapp"></i></a>
            </li>
        </ul>

        <div class="pt-3 text-center">
            Copyright © 2023 {{$settings['title']}}
        </div>
    </footer>
    <!--/ End Footer Area -->

    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!--====== js ======-->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script src="{{ asset('assets') }}/js/tiny-slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        //===== close navbar-collapse when a  clicked
        let navbarTogglerNine = document.querySelector(
            ".navbar-nine .navbar-toggler"
        );
        navbarTogglerNine.addEventListener("click", function() {
            navbarTogglerNine.classList.toggle("active");
        });

        // ==== left sidebar toggle
        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function() {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function() {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        // ===== navbar nine sideMenu
        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

        sideMenuLeftNine.addEventListener("click", function() {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
    @yield('script')
</body>

</html>