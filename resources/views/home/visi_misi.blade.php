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
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Visi</h3>

                <div class="text-center my-3">
                    <h3>{{ $settings['visi'] }}</h3>
                </div>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Misi</h3>

                <ul class="list-group mb-0 px-3">
                    @foreach ($misi as $index => $row)
                        <li class="mb-2 list-group-item d-md-flex justify-content-between align-items-center border-0 mb-0 rounded"
                            style="background-color: #f4f6f7;">
                            <div class="d-flex">
                                <span class="badge bg-primary me-2 " style="height: 20px">{{ $index + 1 }}</span>
                                {{ $row->name }}
                            </div>
                            <div class="mb-auto">
                                <a href="{{ route('landing.visi_misi.detail', ['slug' => $row->slug]) }}"
                                    class="btn btn-sm btn-primary text-nowrap"><i class="fas fa-arrow-right"></i> Lihat
                                    Selengkapnya</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Program Kerja</h3>

                <ul class="list-group mb-0 px-3">
                    @foreach ($program_kerja as $index => $row)
                        <li class="mb-2 list-group-item d-flex align-items-center border-0 mb-0 rounded"
                            style="background-color: #f4f6f7;">
                            <span class="badge bg-primary me-2">{{ $index + 1 }}</span>
                            {{ $row->name }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
