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
            <h5 class="fw-bold mt-2">Selamat!</h5>
            <h5 class="fw-bold">Anda Berhasil Gabung dan Dukung TSANY!</h5>
            <a href="{{ url('') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
            </a>
        </div>
    </div>
@endsection
