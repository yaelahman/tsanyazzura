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
                <div class="col-12">
                    <div class="about-five-content text-center">
                        <h2 class="main-title fw-bold text-gradient">Tentang Tsanny</h2>
                    </div>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Biografi</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-4 d-md-none d-block text-center mb-4">
                                    <img src="{{ asset('galeri') . "/$biografi->image" }}" width="100%" alt="">
                                </div>
                                <div class="col-md-8">
                                    {!! $biografi->body !!}
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <img src="{{ asset('galeri') . "/$biografi->image" }}" width="100%" alt="">
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Pendidikan</h2>
                            </div>
                            <!-- Experience Card 1-->
                            {{-- <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5 px-5">
                                    <div class="d-flex flex-column flex-md-row justify-content-between">
                                        <div class="d-flex gap-3">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Logo_Universitas_Brawijaya.svg/1018px-Logo_Universitas_Brawijaya.svg.png"
                                                height="80px" alt="">
                                            <div class="flex-grow-1">
                                                <h3 class="mb-0">University of Colorado Boulder</h3>
                                                <div class="subheading mb-3">Bachelor of Science</div>
                                                <div>Computer Science - Web Development Track</div>
                                                <p>GPA: 3.23</p>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                @foreach ($pendidikan as $item)
                                    <div class="col-md-4">
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <img src="{{ asset('galeri' . "/$item->image") }}" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="mb-0 card-title">{{ $item->title }}</h5>
                                                <p class="mb-0 card-text">{{ $item->text }}</p>
                                                <p class="mb-0 card-text">{{ $item->date }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Organisasi</h2>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="row">
                                @foreach ($organisasi as $item)
                                    <div class="col-md-4 mb-4">
                                        <div class="card shadow border-0 rounded-4">
                                            <div class="card-body px-3 py-3">
                                                <div class="text-center">
                                                    <img src="{{ asset('galeri' . "/$item->image") }}" height="60px"
                                                        class="rounded-circle border" alt="">
                                                </div>
                                                <div class="text-center py-3">
                                                    <h5 class="fw-bold">{{ $item->title }}</h5>
                                                    <h6 class="text-muted">{{ $item->text }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Komite</h2>
                            </div>
                            <!-- Experience Card 1-->

                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-0 komite">
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            @foreach ($komite as $item)
                                                <div class="col mb-4">
                                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                        {{ $item->title }}</div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Riwayat Pelatihan</h2>
                            </div>
                            <!-- Experience Card 1-->

                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    @foreach ($riwayat_pelatihan as $index => $item)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <div class="card shadow mx-3 border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <img src="{{ asset('galeri' . "/$item->image") }}"
                                                                alt="" style="width:100%">
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-secondary fw-bolder mb-2">
                                                                    {{ $item->date }}</div>
                                                                <div class="mb-1">
                                                                    <div class="small fw-bolder">{{ $item->title }}</div>
                                                                </div>
                                                                <div class="fst-italic">
                                                                    <div class="small text-muted">{{ $item->text }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="text-center">
                                <button class=" btn btn-outline-primary" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <button class=" btn btn-outline-primary" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </section>
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Riwayat Pembicara</h2>
                            </div>
                            <!-- Experience Card 1-->

                            <div id="carouselExample2" class="carousel slide">
                                <div class="carousel-inner">
                                    @foreach ($riwayat_pembicara as $index => $item)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <div class="card shadow mx-3 border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <img src="{{ asset('galeri' . "/$item->image") }}"
                                                                alt="" style="width:100%">
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-secondary fw-bolder mb-2">
                                                                    {{ $item->date }}</div>
                                                                <div class="mb-1">
                                                                    <div class="small fw-bolder">{{ $item->title }}</div>
                                                                </div>
                                                                <div class="fst-italic">
                                                                    <div class="small text-muted">{{ $item->text }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="text-center">
                                <button class=" btn btn-outline-primary" type="button"
                                    data-bs-target="#carouselExample2" data-bs-slide="prev">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <button class=" btn btn-outline-primary" type="button"
                                    data-bs-target="#carouselExample2" data-bs-slide="next">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </section>
                        <section class="mb-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Prestasi</h2>
                            </div>
                            <!-- Experience Card 1-->


                            <div class="row">
                                <div class="col-md-5">
                                    @foreach ($prestasi_badge as $item)
                                        @if ($item->text == 'biru')
                                            <div class="py-3 mb-3 card border-0 rounded-4 bg-primary text-white">
                                                <div class="card-body d-flex justify-content-end gap-2">
                                                    <div class="text-end">
                                                        <h3 class="fw-bolder mb-0">{{ $item->title }}</h3>
                                                        {{-- <h6>Oke</h6> --}}
                                                    </div>
                                                    <div class="mb-auto">
                                                        <!-- <div class="p-3 bg-white rounded-circle" style="height: 40px; width: 40px;"> -->
                                                        <i
                                                            class="fas fa-trophy text-primary bg-white rounded-circle p-2 fs-4 "></i>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($item->text == 'putih')
                                            <div class="py-3 mb-3 card border rounded-4 bg-white text-primary">
                                                <div class="card-body d-flex justify-content-end gap-2">
                                                    <div class="text-end">
                                                        <h3 class="fw-bolder mb-0">{{ $item->title }}</h3>
                                                        {{-- <h6>Oke</h6> --}}
                                                    </div>
                                                    <div class="mb-auto">
                                                        <!-- <div class="p-3 bg-white rounded-circle" style="height: 40px; width: 40px;"> -->
                                                        <i
                                                            class="fas fa-trophy text-white bg-primary rounded-circle p-2 fs-4 "></i>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-7">
                                    <ol>
                                        @foreach ($prestasi as $item)
                                            <li class="fs-5 fw-bold">{{ $item->title }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
