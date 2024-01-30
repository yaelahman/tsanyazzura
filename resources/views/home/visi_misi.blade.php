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
                        <a href="{{ route('landing.visi_misi.detail', ['slug' => $row->slug]) }}"
                            class="text-decoration-none">
                            <li class="mb-2 card-proker list-group-item d-md-flex justify-content-between align-items-center border-0 mb-0 rounded"
                                style="background-color: #f4f6f7;">
                                <div class="d-flex">
                                    <span class="badge bg-primary me-2 rounded-pill"
                                        style="height: 20px; width:20px">{{ $index + 1 }}</span>
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-0 fw-bold">{{ $row->name }}</h5>
                                        <h6 class="mb-0 fw-normal">{{ $row->title }}</h6>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Program Kerja</h3>

                <ul class="list-group mb-0 px-3">
                    @foreach ($program_kerja as $index => $row)
                        <a href="{{ route('landing.program_kerja.detail', ['slug' => $row->slug]) }}"
                            class="text-decoration-none">
                            <li class="mb-2 card-proker list-group-item d-md-flex justify-content-between align-items-center border-0 mb-0 rounded"
                                style="background-color: #f4f6f7;">
                                <div class="d-flex">
                                    <span class="badge bg-primary me-2 rounded-pill"
                                        style="height: 20px; width:20px">{{ $index + 1 }}</span>
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-0 fw-bold">{{ $row->name }}</h5>
                                        <h6 class="mb-0 fw-normal">{{ $row->title }}</h6>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Fokus Isu</h3>

                <div id="fokus-isu" class="mx-auto">
                    <div class="fokus-1 text-center"><span class="bg-white rounded-circle px-2 fs-5 text-primary">1</span>
                        <br> [Daya
                        berdaya
                        SAKTI]
                    </div>
                    <div class="fokus-2 text-center"><span class="bg-white rounded-circle px-2 fs-5 text-primary">2</span>
                        <br> [Daya kembang SAKTI]
                    </div>
                    <div class="fokus-3 text-center"><span class="bg-white rounded-circle px-2 fs-5 text-primary">3</span>
                        <br> [Daya Tumbuh SAKTI]
                    </div>
                    <div class="fokus-4 text-center"><span class="bg-white rounded-circle px-2 fs-5 text-primary">4</span>
                        <br> [Daya Inklusif dan kolaborasi SAKTI]
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
