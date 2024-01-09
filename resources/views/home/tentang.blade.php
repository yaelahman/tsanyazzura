@extends('home.layouts')
@section('content')
    <section class="about-area about-five w-100">

        <section id="jumbotron" class="container">
            <div class="text-center image">
                <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                    alt="">
                <div id="overlay"></div>
            </div>

        </section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about-five-content">
                        <h6 class="small-title text-lg">Tentang</h6>
                        <h2 class="main-title fw-bold">Tentang Tsanny</h2>
                    </div>
                </div>
                <div class="col-12 mt-3 px3">
                    {!! $settings['about'] ?? '' !!}
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
