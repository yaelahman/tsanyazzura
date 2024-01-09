@extends('home.layouts')
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" class="mx-auto" alt="">
            <div id="overlay"></div>
        </div>
        <div class="text-center text-dark mt-3">
            <h4 class="fw-bold">Perubahan Itu</h4>
            <div class="mt-2">
                <h2 class="text-success fw-bold">Lapangan kerja untuk warga lokal</h2>
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
                        <h6>Tsany</h6>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('new') }}/assets/img/R (409).webp" width="100%" class="me-3" alt="">
                    </div>
                </div>
                <div class="col-md-8 text-white px-4">
                    <div class="text-start">
                        <small>5 Rekam Karya Penting</small>
                        <h3 class="fw-bold mb-0">RAIHAN TSANY</h3>
                    </div>
                    <ul class="py-0 rounded-3">
                        <li>
                            <div class="d-flex">
                                <span class="badge">1</span>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, dolorem!</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="badge">2</span>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, dolorem!</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="badge">3</span>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, dolorem!</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="badge">4</span>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, dolorem!</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="badge">5</span>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, dolorem!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="visimisi" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 my-auto">
                    <div class="text-center text-md-start my-auto mb-5 mb-md-auto">
                        <h2 class="fw-bold text-uppercase">Visi & MISI</h2>
                        <div class="text-primary me-auto" style="max-width: 600px;">
                            <h6>"Mencerdaskan Kehidupan Bangsa"</h6>
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
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product-image">
                                    <img style="border-radius: 7px" width="199px" height="288px"
                                        class="text-center image-product-new"
                                        src="https://aminajadulu.com/assets/img-misi-1-XwPBjb-J.webp" alt="">
                                    <h3 class="card-product-image-text">MISI 01</h3>
                                    <div class="card-product-blur"></div>
                                </div>
                            </div>
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


    <section class="my-5 container">
        <div id="support" class="rounded-5">
            <div class="row pt-5">
                <div class="col-md-8 text-white px-5 my-auto d-none d-md-block">
                    <h1 class="text-uppercase">Semua Harapan Dimulai dengan <b>TSANY</b>
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
                    <h1 class="text-uppercase">Semua Harapan Dimulai dengan <b>TSANY</b>
                    </h1>
                    <div class="btn-relative">
                        <a href="{{ route('landing.dukung_sakti') }}" class="btn btn-tsany">Ayo Gabung Dukung Tsany</a>
                        <div class="border-btn"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
