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
        <div class="d-flex justify-content-between border-bottom mb-3">
            <h5 class="fw-bold">Gabung dan Dukung TSANY</h5>
        </div>
        <form action="{{ route('landing.dukung_sakti.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="number" name="whatsapp" class="form-control" required id="floatingInput" placeholder="">
                <label for="floatingInput">Nomor WhatsApp <small class="text-danger">*</small></label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nama" class="form-control" required id="floatingInput" placeholder="">
                <label for="floatingInput">Nama Lengkap (sesuai KTP) <small class="text-danger">*</small></label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" name="nik" class="form-control" required id="floatingInput" placeholder="">
                <label for="floatingInput">NIK <small class="text-danger">*</small></label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="jenis_kelamin" id="floatingSelect" required
                    aria-label="Floating label select example">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <label for="floatingSelect">Jenis Kelamin <small class="text-danger">*</small></label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="wilayah" id="floatingSelect" required
                    aria-label="Floating label select example">
                    <option value="">Pilih Wilayah</option>
                    <option value="Karangsari">Karangsari</option>
                    <option value="Turi">Turi</option>
                    <option value="Tlumpu">Tlumpu</option>
                    <option value="Blitar">Blitar</option>
                    <option value="Tanjungsari">Tanjungsari</option>
                    <option value="Pakunden">Pakunden</option>
                    <option value="Sukorejo">Sukorejo</option>
                    <option value="Bolo Ghaib (Luar Dapil)">Bolo Ghaib (Luar Dapil)</option>
                </select>
                <label for="floatingSelect">Keluarahan <small class="text-danger">*</small></label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="alamat" class="form-control" required id="floatingInput" placeholder="">
                <label for="floatingInput">Alamat <small class="text-danger">*</small></label>
            </div>
            <div class="row row-cols-2">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="rt" class="form-control" required id="floatingInput"
                            placeholder="">
                        <label for="floatingInput">RT <small class="text-danger">*</small></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="rw" class="form-control" required id="floatingInput"
                            placeholder="">
                        <label for="floatingInput">RW <small class="text-danger">*</small></label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tim_sukses" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Tim Sukses <small>(Opsional)</small></label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="koordinator" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Nama Koordinator <small>(Opsional)</small></label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="tps" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">No TPS <small>(Opsional)</small></label>
                <small>Cek data TPS Anda di <a
                        href="https://cekdptonline.kpu.go.id">https://cekdptonline.kpu.go.id</a></small>
            </div>
            <button class="btn btn-primary w-100">
                <i class="fas fa-paper-plane"></i> Gabung dan Dukung TSANY
            </button>
        </form>
    </div>
@endsection
