@extends('home.layouts')
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                alt="">
            <div id="overlay"></div>
        </div>

    </section>
    <section class="about-area about-five w-100">
        <div class="container">
            <h1 class="text-center text-primary mb-3">Warta</h1>
            <div class="row mb-4">
                <div class="col-md-8">

                    <img src="{{ asset('galeri/' . $warta->image) }}" width="100%" class="mb-3" alt="...">
                    <div class="text-start">
                        <h3 class="fw-bold mb-0">{{ $warta->title }}</h3>
                        <h6 class="text-muted">
                            {!! $warta->text !!}
                        </h6>
                    </div>
                    <div class="mb-3 mt-2 px-3">
                        {!! $warta->body !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-2">
                        <h3>Warta Lainnya</h3>
                    </div>
                    <div class="card rounded-4 border-0" style="background-color: #F6F6F6">
                        <div class="card-body border-0">
                            @foreach ($allWarta as $index => $item)
                                <div class="mb-2">
                                    <a class="text-decoration-none"
                                        href="{{ route('landing.warta.detail', ['slug' => $item->slug]) }}">
                                        {{ $item->title }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
