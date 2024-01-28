@extends('home.layouts')
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                alt="">
            <div id="overlay"></div>
        </div>

    </section>
    <div class="container mt-5">
        <h3 class="text-center text-primary mb-5">Warta</h3>
        <div class="row">
            @foreach ($galeri as $row)
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card border-0 shadow rounded-4 overflow-hidden card-warta h-100">
                        <img src="{{ asset('galeri/' . $row->image) }}" class="card-img-top card-img-warta" alt="...">
                        <div class="card-body">
                            <small class="card-text text-muted">{{ date('d-m-Y H:i') }}</small>
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <h6 class="text-muted">{{ $row->text }}</h6>
                            <a href="{{ route('landing.warta.detail', ['slug' => $row->slug]) }}"
                                class="text-decoration-none">
                                <span class="text-decoration-underline">Baca Selengkapnya</span> <i
                                    class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Single News -->
                    {{-- <div class="single-news">
                        <div class="image">
                            <a href="javascript:void(0)"><img class="thumb" width="100%"
                                    src="{{ asset('galeri/' . $row->image) }}" alt="Blog" /></a>
                        </div>
                        <div class="content-body">
                            <h4 class="title">
                                <a href="javascript:void(0)" class="text-primary text-decoration-none">
                                    {{ $row->title }} </a>
                            </h4>
                            <p>
                                {{ $row->text }}
                            </p>
                        </div>
                    </div> --}}
                    <!-- End Single News -->
                </div>
            @endforeach

        </div>
    </div>
@endsection
