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
            <h1 class="text-center text-primary mb-3">Program Kerja</h1>
            <div class="row mb-4">
                <div class="col-md-8">

                    <div class="text-start">
                        <h3 class="fw-bold mb-0">{{ $misi->title }}</h3>
                    </div>
                    <div class="mb-3 mt-2 px-3">
                        {!! $misi->text !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-2">
                        <h3>Daftar Program Kerja</h3>
                    </div>
                    <div class="card rounded-4 border-0" style="background-color: #F6F6F6">
                        <div class="card-body border-0">
                            @foreach ($allMisi as $index => $item)
                                <div class="border-bottom d-flex justify-content-between">
                                    <div class="py-1">
                                        <h5 class="mb-0">PROKER 0{{ $index + 1 }}</h5>
                                        <p class="py-1 mb-0 text-xs">{{ $item->name }}</p>
                                    </div>
                                    <div class="mb-auto">
                                        <a href="{{ route('landing.program_kerja.detail', ['slug' => $item->slug]) }}"
                                            class="btn btn-primary btn-sm rounded-4 text-nowrap mt-2">
                                            <i class="fas fa-scroll"></i> Detail
                                        </a>
                                    </div>
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
