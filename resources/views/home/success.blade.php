@extends('home.layouts')
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                alt="">
            <div id="overlay"></div>
        </div>

    </section>
    <div class="container my-5 px-5">
        <div class="mx-auto text-center mb-3">
            <i class="fas fa-check-circle text-success" style="font-size: 120px"></i>
            <br>
            <h5 class="fw-bold mt-2">Congrats Boloku !</h5>
            <h5 class="fw-bold">Anda Berhasil Gabung dan Dukung TSANY!</h5>
            <h5 class="fw-bold"> Sekarang anda telah berhasil bergabung menjadi bagian Bolone Raihan Tsany dan menjadi
                Pemuda yang Still !</h5>
            <h6>Klik ini untuk berinteraksi langsung dengan Calon Dewan nya bolo, Mboten usah sungkan #bolodewe</h6>
            <div class="d-flex gap-3 justify-content-center">
                <a href="{{ route('landing.dukung_sakti') }}" class="btn btn-light">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="http://linktr.ee/raihantsany" class="btn btn-primary">
                    Lanjut <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
