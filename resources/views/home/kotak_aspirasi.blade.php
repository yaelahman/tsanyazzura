@extends('home.layouts')
@php
    use App\Aspirasi;
@endphp
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                alt="">
            <div id="overlay"></div>
        </div>

    </section>
    <section class="about-area about-five">
        <div class="container">
            <h3 class="text-center text-primary mb-5">Kotak Aspirasi</h3>
            <div class="mb-5">
                <div class="light-rounded-buttons">
                    <a href="javascript:void(0)" data-backdrop="static" data-toggle="modal" data-target="#exampleModal"
                        class="btn btn-primary text-sm">+ Aspirasi</a>
                </div>
                <div class="my-2">
                    {!! $settings['deskripsi_aspirasi'] !!}
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade border-primary" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('landing.kotak_aspirasi.store') }}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Aspirasi</h5>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-group mb-2">
                                        <label for="">Nama</label>
                                        <input type="text" placeholder="Nama" name="nama" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">No HP</label>
                                        <input type="number" placeholder="No HP" name="no_hp" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Alamat</label>
                                        <input type="text" placeholder="Alamat" name="alamat" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Pekerjaan</label>
                                        <input type="text" placeholder="Pekerjaan" name="pekerjaan" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Aspirasi</label>
                                        <textarea name="pesan" id="pesan" cols="30" rows="4" class="form-control" required
                                            placeholder="Pesan Aspirasi"></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Lampiran <small class="text-small text-danger">*Jika
                                                ada</small>
                                        </label>
                                        <div class="custom-file border">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" style="font-size: 12px !important;"
                                    data-dismiss="modal">
                                    Tutup
                                </button>
                                <button type="submit" class="btn btn-primary" style="font-size: 12px !important;">
                                    <i class="fas fa-paper-plane"></i> Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade border-primary" id="AspirasiModal" tabindex="-1" role="dialog"
                aria-labelledby="AspirasiModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AspirasiModalLabel">Detail Aspirasi</h5>
                        </div>
                        <div class="modal-body modal-body-aspirasi">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="font-size: 12px !important;"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                @foreach ($aspirasi as $index => $row)
                    <div class="col-12 mb-4">
                        <div class="card card-aspirasi-{{ $index }} rounded-4 py-2 border-0 shadow mb-3">
                            <div class="card-body" style="min-height: 120px;">
                                <div class="d-flex gap-2 w-100">

                                    <div class="rounded-circle d-flex text-center"
                                        style="height: 50px;width: 50px; background-color: {!! Aspirasi::convertImage($row->nama)['background'] !!};">
                                        <h6 class="mx-auto my-auto text-uppercase">
                                            {{ Aspirasi::convertImage($row->nama)['name'] }}
                                        </h6>
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex gap-2">
                                                <div class="text-start">
                                                    <h6 class="my-auto text-uppercase" style="letter-spacing: -1.5px">
                                                        @foreach (explode(' ', $row->nama) as $index => $nm)
                                                            @if ($index <= 1)
                                                                @foreach (str_split($nm) as $inm => $n)
                                                                    @if ($inm == 0)
                                                                        {{ $n }}
                                                                    @else
                                                                        @if ($inm < 5)
                                                                            *
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                                &nbsp;
                                                            @endif
                                                        @endforeach
                                                    </h6>
                                                    <span class="text-muted text-xs my-0 py-0">{{ $row->prodi }}</span>
                                                </div>

                                            </div>
                                            <small
                                                style="color: #a59f9f; white-space: nowrap;">{{ date('d/m/Y H:i', strtotime($row->created_at)) }}</small>
                                        </div>
                                        <div class="d-flex justify-content-between flex-column h-auto">
                                            <div class="mt-2 aspirasi-text d-flex gap-2">
                                                <i class="fas fa-comment pt-2"></i>
                                                <p class="mb-0 pb-2 pt-1 text-muted">
                                                    "{{ str_replace('"', '', $row->pesan) }}"</p>
                                            </div>
                                            <div class="mt-2">
                                                {{-- <button class="btn btn-primary btn-sm btn-aspirasi ms-auto"
                                                    data-index="{{ $index }}"
                                                    data-tanggal="{{ date('d/m/Y H:i', strtotime($row->updated_at)) }}"
                                                    data-balasan="{{ $row->balasan }}" data-pesan="{{ $row->pesan }}"
                                                    data-backdrop="static" data-toggle="modal" data-target="#AspirasiModal"
                                                    style="border-radius: 12px">
                                                    <i class="fas fa-scroll"></i> Detail
                                                </button> --}}
                                                @if ($row->lampiran != null)
                                                    <a href="{{ asset('galeri/' . $row->lampiran) }}" target="_blank"
                                                        class="btn btn-sm btn-secondary" style="border-radius: 12px;">
                                                        <i class="fas fa-image"></i> Lampiran
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        @if ($row->balasan != null)
                                            <div class="accordion rounded-4" id="accordionExample">
                                                <div class="accordion-item rounded-4">
                                                    <h2 class="accordion-header border-0">
                                                        <button
                                                            class="accordion-button rounded-4 bg-white border-0 px-3 py-2 shadow-none"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            <b>Balasan</b>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="d-flex gap-2 w-100">

                                                                <img src="{{ asset('new') }}/assets/img/R (473).webp"
                                                                    width="50px" height="50px"
                                                                    class="rounded-circle shadow border" alt="...">
                                                                <div class="w-100">
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex gap-2">
                                                                            <div class="text-start">
                                                                                <h6 class="my-auto text-uppercase"
                                                                                    style="letter-spacing: -1.5px">
                                                                                    Raihan Tsany
                                                                                </h6>
                                                                            </div>

                                                                        </div>
                                                                        <small
                                                                            style="color: #a59f9f; white-space: nowrap;">{{ date('d/m/Y H:i', strtotime($row->updated_at)) }}</small>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-between flex-column h-auto">
                                                                        <div class="mt-2 aspirasi-text d-flex gap-2">
                                                                            <i class="fas fa-comment pt-2"></i>
                                                                            <p class="mb-0 pb-2 pt-1 text-muted">
                                                                                "{{ str_replace('"', '', $row->balasan) }}"
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-start">
                                                <h6 class="text-danger">Belum ada Balasan</h6>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="card-aspirasi-{{ $index }} card h-100">
                            <div class="card-header bg-primary">
                                <div class="d-flex">

                                    <div class="rounded-circle d-flex text-center"
                                        style="height: 50px;width: 50px; background-color: {!! Aspirasi::convertImage($row->nama)['background'] !!};">
                                        <h6 class="mx-auto my-auto">{{ Aspirasi::convertImage($row->nama)['name'] }}</h6>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="text-white text-sm">
                                            @foreach (explode(' ', $row->nama) as $nm)
                                                @foreach (str_split($nm) as $inm => $n)
                                                    @if ($inm == 0)
                                                        {{ $n }}
                                                    @else
                                                        *
                                                    @endif
                                                @endforeach
                                                &nbsp;
                                            @endforeach
                                        </h6>
                                        <h6 class="text-white text-xs">{{ $row->prodi }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <h6>
                                    "{{ $row->pesan }}"
                                </h6>
                                <p style="font-size: 12px;" class="text-primary">
                                    #{{ Aspirasi::SASARAN[$row->sasaran_aspirasi] }}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <small class="text-muted text-sm my-auto">
                                    {{ date('d/m/Y H:i', strtotime($row->created_at)) }}
                                </small>
                                <div class="btn-group">
                                    @if ($row->balasan != null)
                                        <button class="btn btn-sm btn-primary py-1 px-1 btn-aspirasi"
                                            data-index="{{ $index }}"
                                            data-tanggal="{{ date('d/m/Y H:i', strtotime($row->updated_at)) }}"
                                            data-balasan="{{ $row->balasan }}" data-backdrop="static"
                                            data-toggle="modal" data-target="#AspirasiModal"
                                            style="font-size: 10px">Balasan</button>
                                    @endif
                                    @if ($row->lampiran != null)
                                        <a href="{{ asset('galeri/' . $row->lampiran) }}" target="_blank"
                                            class="btn btn-sm btn-secondary py-1 px-1"
                                            style="font-size: 10px">Lampiran</a>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                        </div>
                @endforeach
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
@section('script')
    <script>
        $('.btn-aspirasi').on('click', function() {
            let index = $(this).data('index')
            let tanggal = $(this).data('tanggal')
            let balasan = $(this).data('balasan')
            let pesan = $(this).data('pesan')

            $('.modal-body-aspirasi').html(`
        <div class="card">
                <div class="card">
                    <div class="card-body">
                        <h6>Pesan</h6>
                        <p>"${pesan}"</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6>Balasan</h6>
                        <p>"${balasan}"</p>
                    </div>
                    <div class="card-footer">
                    
                        <small class="text-muted text-sm my-auto">
                            ${tanggal}
                        </small>
                    </div>
                </div>
            </div>
        `)
        })
    </script>
@endsection
