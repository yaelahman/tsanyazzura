@extends('home.layouts')
@section('content')
<section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>{{ $settings['title'] }}.</h1>
            <p>
              {{ $settings['deskripsi'] }}
            </p>
            <div class="button">
              <a href="javascript:void(0)" class="btn primary-btn">Pantau Aspirasi</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="{{ asset('galeri/' . $settings['foto_utama']) }}" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection