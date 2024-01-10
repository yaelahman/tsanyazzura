<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raihan Tsany</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('new') }}/assets/style/index.css?v={{ rand(0, 999) }}">

    <link rel="icon" type="image/png" href="{{ asset('new') }}/assets/img/logo.webp" />
    <link rel="stylesheet" href="{{ asset('new') }}/assets/style/swiper.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav class="navbar sticky-top bg-body-tertiary py-4">
        <div class="d-block d-md-none" style="position: absolute; left: 20px; top: 24px;">
            <button class="btn btn-light text-primary my-auto" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="container-fluid d-flex justify-content-center gap-4">
            <a class="nav-link link d-none mt-2 d-md-block" href="{{ route('landing.tentang') }}">Kenali Tsany</a>
            <a class="nav-link link d-none mt-2 d-md-block" href="{{ url('') }}">Kotak Aspirasi</a>
            <a class="nav-link link d-none mt-2 d-md-block" href="{{ url('') }}">Warta</a>
            <a class="nav-link link logo mt-2" href="{{ url('') }}">
                <img src="{{ asset('new') }}/assets/img/logo.webp" width="120px" alt="">
            </a>
            <a class="nav-link link d-none mt-2 d-md-block" href="{{ route('landing.dukung_sakti') }}">Dukung Sakti</a>
            <a class="nav-link link d-none mt-2 d-md-block" href="{{ route('landing.lapak') }}">Lapak Sakti</a>
            <a class="nav-link link d-none mt-2 d-md-block" href="{{ url('') }}">Program Kerja</a>
        </div>
    </nav>
    <main class="mb-5">

        @yield('content')

    </main>
    <footer class="rounded-top-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 mb-5">
                    <div class="d-flex gap-3">
                        <img src="{{ asset('new') }}/assets/img/R (473).webp" width="120px" height="120px"
                            class="rounded-circle shadow border" alt="...">
                        <div class="text-start">
                            <small class="text-muted">Media Sosial</small>
                            <h4 class="text-primary mb-0">RAIHAN TSANY</h4>
                            <div class="d-flex gap-3" style="font-size: 30px;">
                                <a href="{{ $settings['facebook'] }}" target="_blank" style="text-decoration: none;">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="{{ $settings['linkedin'] }}" target="_blank" style="text-decoration: none;">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="{{ $settings['instagram'] }}" target="_blank" style="text-decoration: none;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://wa.me/62{{ $settings['whatsapp'] }}" target="_blank"
                                    style="text-decoration: none;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 ps-5">
                    <h6>DUKUNG TSANY</h6>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0 p-0">
                            <a href="{{ route('landing.tentang') }}" class="text-dark"
                                style="text-decoration: none;">Kenali
                                Tsany</a>
                        </li>
                        <li class="list-group-item bg-transparent border-0 p-0">
                            <a href="{{ url('') }}" class="text-dark" style="text-decoration: none;">Kotak
                                Aspirasi</a>
                        </li>
                        <li class="list-group-item bg-transparent border-0 p-0">
                            <a href="{{ url('') }}" class="text-dark" style="text-decoration: none;">Warta</a>
                        </li>
                        <li class="list-group-item bg-transparent border-0 p-0">
                            <a href="{{ route('landing.dukung_sakti') }}" class="text-dark"
                                style="text-decoration: none;">Dukung Sakti</a>
                        </li>
                        <li class="list-group-item bg-transparent border-0 p-0">
                            <a href="{{ route('landing.lapak') }}" class="text-dark"
                                style="text-decoration: none;">Lapak
                                Sakti</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-5 ps-5">
                    <h6>Program Kerja</h6>
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent border-0 p-0">
                            <a href="{{ route('landing.tentang') }}" class="text-dark"
                                style="text-decoration: none;">Kenali
                                Tsany</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center pb-3">©2024 Raihan Tsany</div>
        </div>
    </footer>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <img src="{{ asset('new') }}/assets/img/logo.webp" width="120px" alt="">
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <ul class="list-group list-custom rounded-0">
                <li class="list-group-item border-0">
                    <a href="{{ route('landing.tentang') }}" class="text-dark" style="text-decoration: none;">Kenali
                        Tsany</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ url('') }}" class="text-dark" style="text-decoration: none;">Program Kerja</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ url('') }}" class="text-dark" style="text-decoration: none;">Kotak
                        Aspirasi</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ url('') }}" class="text-dark" style="text-decoration: none;">Warta</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ route('landing.dukung_sakti') }}" class="text-dark"
                        style="text-decoration: none;">Dukung Sakti</a>
                </li>
                <li class="list-group-item border-0">
                    <a href="{{ route('landing.lapak') }}" class="text-dark" style="text-decoration: none;">Lapak
                        Sakti</a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1524: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>

</html>
