@extends('layouts/app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">dukung-sakti</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pendukung</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('dukung-sakti.index') }}" class="btn btn-success d-none d-md-inline-block text-white">
                        <i class="fas fa-bars"></i>&nbsp;
                        List Data Pendukung</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material mx-2" method="post"
                    action="{{ route('dukung-sakti.update', ['dukung_sakti' => $data->id]) }}">
                    @csrf
                    @method('put')
                    <div class="form-floating mb-3">
                        <input type="number" name="whatsapp" class="form-control" value="{{ $data->whatsapp }}" required
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">Nomor WhatsApp <small class="text-danger">*</small></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">Nama Lengkap (sesuai KTP) <small class="text-danger">*</small></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="nik" class="form-control" value="{{ $data->nik }}" required
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">NIK <small class="text-danger">*</small></label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="jenis_kelamin" id="floatingSelect" required
                            aria-label="Floating label select example">
                            <option value="L" {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki Laki
                            </option>
                            <option value="P" {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                        <label for="floatingSelect">Jenis Kelamin <small class="text-danger">*</small></label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="wilayah" id="floatingSelect" required
                            aria-label="Floating label select example">
                            <option value="">Pilih Wilayah</option>
                            <option {{ $data->wilayah == 'Karangsari' ? 'selected' : '' }} value="Karangsari">Karangsari
                            </option>
                            <option {{ $data->wilayah == 'Turi' ? 'selected' : '' }} value="Turi">Turi</option>
                            <option {{ $data->wilayah == 'Tlumpu' ? 'selected' : '' }} value="Tlumpu">Tlumpu</option>
                            <option {{ $data->wilayah == 'Blitar' ? 'selected' : '' }} value="Blitar">Blitar</option>
                            <option {{ $data->wilayah == 'Tanjungsari' ? 'selected' : '' }} value="Tanjungsari">Tanjungsari
                            </option>
                            <option {{ $data->wilayah == 'Pakunden' ? 'selected' : '' }} value="Pakunden">Pakunden</option>
                            <option {{ $data->wilayah == 'Sukorejo' ? 'selected' : '' }} value="Sukorejo">Sukorejo</option>
                            <option {{ $data->wilayah == 'Bolo Ghaib (Luar Dapil)' ? 'selected' : '' }}
                                value="Bolo Ghaib (Luar Dapil)">Bolo Ghaib (Luar Dapil)</option>
                        </select>
                        <label for="floatingSelect">Keluarahan <small class="text-danger">*</small></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}" required
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">Alamat <small class="text-danger">*</small></label>
                    </div>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" name="rt" class="form-control" value="{{ $data->rt }}"
                                    required id="floatingInput" placeholder="">
                                <label for="floatingInput">RT <small class="text-danger">*</small></label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" name="rw" class="form-control" value="{{ $data->rw }}"
                                    required id="floatingInput" placeholder="">
                                <label for="floatingInput">RW <small class="text-danger">*</small></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="tim_sukses" value="{{ $data->tim_sukses }}" class="form-control"
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">Tim Sukses <small>(Opsional)</small></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="koordinator" value="{{ $data->koordinator }}" class="form-control"
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">Nama Koordinator <small>(Opsional)</small></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="tps" class="form-control" value="{{ $data->tps }}"
                            id="floatingInput" placeholder="">
                        <label for="floatingInput">No TPS <small>(Opsional)</small></label>
                        <small>Cek data TPS Anda di <a
                                href="https://cekdptonline.kpu.go.id">https://cekdptonline.kpu.go.id</a></small>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 d-flex">
                            <button class="btn btn-success mx-auto mx-md-0 text-white">Update Data Pendukung</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
