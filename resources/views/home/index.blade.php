@extends('home.layouts')
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" class="mx-auto" alt="">
            <div id="overlay"></div>
        </div>
        <div class="text-center text-dark mt-3">
            {{-- <h4 class="fw-bold">Perubahan Itu</h4> --}}
            <div class="mt-2">
                <h2 class="text-success fw-bold">Satu Kata Satu Hati</h2>
                <div class="text-muted text-center mx-auto" style="max-width: 600px">
                    <h5>
                        <i>"Wes wayae Cah Enom tulus tampil yang mengambil peran sebagai Subjek Politik bukan lagi dipandang
                            Objek
                            Politik, Monggo Sareng - Sareng Nderek Noto Kutho Patria"</i>
                    </h5>
                </div>
                <div class="text-muted text-center mx-auto" style="max-width: 600px"> -Raihan Tsany
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 container">
        <div id="about" class="rounded-5">
            <div class="row pt-5">
                <div class="col-md-4 text-white">
                    <div class="text-center">
                        <small>Caleg DPRD</small>
                        <h3 class="fw-bold name mb-0">RAIHAN</h3>
                        <h6>Muhamad Raihan Tsany Azurra</h6>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('new') }}/assets/img/R (409).webp" width="100%" class="me-3" alt="">
                    </div>
                </div>
                <div class="col-md-8 text-white px-4">
                    <div class="text-start">
                        <small>Jejak Juang</small>
                        <h3 class="fw-bold mb-0">RAIHAN TSANY</h3>
                    </div>
                    <ul class="py-0 rounded-3">
                        @foreach (\App\Models\RekamJejak::limit(5)->get() as $index => $item)
                            <li>
                                <div class="d-flex">
                                    <span class="badge">{{ $index + 1 }}</span>
                                    <p>{{ $item->text }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-start my-3">
                        <button data-backdrop="static" data-toggle="modal" data-target="#JejakJuangModal"
                            href="{{ route('landing.tentang') }}" style="z-index: 10; position: relative;"
                            class="btn btn-light">
                            Lihat Lebih Banyak <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade border-primary" id="JejakJuangModal" tabindex="-1" role="dialog"
        aria-labelledby="JejakJuangModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="JejakJuangModalLabel">Jejak Juang Raihan Tsany</h5>
                </div>
                <div class="modal-body modal-body-aspirasi">
                    <ol class="py-0 rounded-3">
                        @foreach (\App\Models\RekamJejak::all() as $index => $item)
                            <li>
                                <div class="d-flex">
                                    <p>{{ $item->text }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="font-size: 12px !important;"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <section id="visimisi" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 my-auto">
                    <div class="text-center text-md-start my-auto mb-5 mb-md-auto">
                        <h2 class="fw-bold text-uppercase">Visi & MISI</h2>
                        <div class="text-primary me-auto" style="max-width: 600px;">
                            <h6>{{ $settings['visi'] }}</h6>
                        </div>

                        <div class="nav-swiper mt-3 d-none d-md-block">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($misi as $index => $item)
                                <div class="swiper-slide">
                                    <a href="{{ route('landing.visi_misi.detail', ['slug' => $item->slug]) }}">
                                        <div class="card-product-image">
                                            <img style="border-radius: 7px" width="199px" height="288px"
                                                class="text-center image-product-new"
                                                src="{{ asset('galeri') }}/{{ $item->image }}" alt="">
                                            <div class="card-product-image-text">
                                                <h1 class="ps-0 mb-0">MISI 0{{ $index + 1 }}</h1>
                                                <h6 class="text-start">{{ $item->title }}</h6>
                                            </div>
                                            <div class="card-product-blur"></div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="nav-swiper my-3 d-block d-md-none">
                        <div class="swiper-button-next" style="margin-top: -20px !important;"></div>
                        <div class="swiper-button-prev" style="margin-top: -20px !important;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="accordion rounded-4" id="accordionExample">
            <div class="accordion-item rounded-4">
                <h2 class="accordion-header border-0">
                    <button class="accordion-button rounded-4 bg-white border-0 shadow-none" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <b>CORE VALUE</b>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="text-core">
                            <div class="mb-2 d-flex core-value">
                                <h1 class="rounded-4 w-100 d-flex bg-light py-1 text-primary px-3 text-center my-auto">
                                    <div class="fw-bolder" style="width: 40px !important">S</div> inergi
                                </h1>
                            </div>
                            <div class="mb-2 d-flex core-value">
                                <h1 class="rounded-4 w-100 d-flex bg-light py-1 text-primary px-3 text-center my-auto">
                                    <div class="fw-bolder" style="width: 40px !important">A</div> spirasi
                                </h1>
                            </div>
                            <div class="mb-2 d-flex core-value">
                                <h1 class="rounded-4 w-100 d-flex bg-light py-1 text-primary px-3 text-center my-auto">
                                    <div class="fw-bolder" style="width: 40px !important">K</div> onstruktif
                                </h1>
                            </div>
                            <div class="mb-2 d-flex core-value">
                                <h1 class="rounded-4 w-100 d-flex bg-light py-1 text-primary px-3 text-center my-auto">
                                    <div class="fw-bolder" style="width: 40px !important">T</div> ransparan
                                </h1>
                            </div>
                            <div class="mb-2 d-flex core-value">
                                <h1 class="rounded-4 w-100 d-flex bg-light py-1 text-primary px-3 text-center my-auto">
                                    <div class="fw-bolder" style="width: 40px !important">I</div> ntegrasi
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="my-5 container">

        <div id="support" class="rounded-5">
            <div class="row pt-5">
                <div class="col-md-8 text-white px-5 mt-5 pt-5 d-none d-md-block">
                    <h1 class="text-uppercase fw-bolder">COBLOS NOMOR 1</h1>
                    <h1 class="text-uppercase">GILIRAN KALIAN YANG MENGAMBIL PERAN !
                    </h1>
                    <div class="btn-relative">
                        <a href="{{ route('landing.dukung_sakti') }}" class="btn btn-tsany">Ayo Gabung Dukung Tsany</a>
                        <div class="border-btn"></div>
                    </div>

                </div>
                <div class="col-md-4 text-white">
                    <div class="text-center">
                        <img src="{{ asset('new') }}/assets/img/R (104).webp" width="100%" class="me-3"
                            style="max-width: 300px;" alt="">
                    </div>
                </div>
                <div class="col-md-8 text-white px-5 my-auto d-block d-md-none pb-5 mb-5">
                    <h1 class="text-uppercase text-center fw-bolder">COBLOS NOMOR 1</h1>
                    <h1 class="text-uppercase text-center">GILIRAN KALIAN YANG MENGAMBIL PERAN !
                    </h1>
                    <div class="btn-relative">
                        <a href="{{ route('landing.dukung_sakti') }}" class="btn btn-tsany d-none d-md-block">Ayo Gabung
                            Dukung Tsany</a>
                        <div class="border-btn"></div>
                    </div>
                    <div class="btn-relative text-center">
                        <a href="{{ route('landing.dukung_sakti') }}"
                            class="btn btn-tsany d-block d-md-none text-center mx-auto">Ayo Gabung
                            Dukung Tsany</a>
                        <div class="border-btn"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
