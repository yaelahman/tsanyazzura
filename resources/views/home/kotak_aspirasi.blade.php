@extends('home.layouts')
@php
use \App\Aspirasi;
@endphp
@section('content')
<section class="about-area about-five">
    <div class="container">
        <h3 class="text-center text-primary mb-5">Kotak Aspirasi</h3>
        <div class="mb-5">
            <div class="light-rounded-buttons">
                <a href="javascript:void(0)" data-backdrop="static" data-toggle="modal" data-target="#exampleModal" class="btn primary-btn-outline text-sm">+ Aspirasi</a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade border-primary" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="text" placeholder="Nama" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">NIM</label>
                                    <input type="text" placeholder="NIM" name="nim" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Prodi</label>
                                    <input type="text" placeholder="Prodi" name="prodi" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Angkatan</label>
                                    <input type="text" placeholder="Angkatan" name="angkatan" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Lingkup Aspirasi</label>
                                    <select name="lingkup_aspirasi" id="lingkup_aspirasi" class="form-control" required>
                                        <option value="0">Sarana Prasarana</option>
                                        <option value="1">Akademik</option>
                                        <option value="2">Fasilitas</option>
                                        <option value="3">UKT</option>
                                        <option value="4">Pengawasan Eksekutif Mahasiswa</option>
                                        <option value="5">Kebijakan Kampus (Rektorat)</option>
                                        <option value="6">Kesejahteraan Mahasiswa</option>
                                        <option value="7">UKM</option>
                                        <option value="8">Layanan Umum UB</option>
                                        <option value="9">Kerja Sama</option>
                                        <option value="10">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Sasaran Aspirasi</label>
                                    <select name="sasaran_aspirasi" id="sasaran_aspirasi" class="form-control" required>
                                        <option value="0">DEWAN PERWAKILAN MAHASISWA UB</option>
                                        <option value="1">EKSEKUTIF MAHASISWA UB</option>
                                        <option value="2">Wakil Rektor Bidang Akademik</option>
                                        <option value="3">Wakil Rektor Bidang Keuangan dan Sumber Daya</option>
                                        <option value="4">Wakil Rektor Bidang Kemahasiswaan, Alumni dan Kewirausahaan
                                            Mahasiswa</option>
                                        <option value="5">Wakil Rektor Bidang Perencanaan, Kerjasama, dan
                                            Internasionalisasi</option>
                                        <option value="6">Wakil Rektor Bidang Riset dan Inovasi</option>
                                        <option value="7">Sekretaris Universitas</option>
                                        <option value="8">DEKANAT FAKULTAS ILMU ADMINSITRASI</option>
                                        <option value="9">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Pesan</label>
                                    <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" required placeholder="Pesan Aspirasi"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Lampiran <small class="text-small text-danger">*Jika ada</small>
                                    </label>
                                    <div class="custom-file border">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="font-size: 12px !important;" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" style="font-size: 12px !important;">Save
                                changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade border-primary" id="AspirasiModal" tabindex="-1" role="dialog" aria-labelledby="AspirasiModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AspirasiModalLabel">Detail Aspirasi</h5>
                    </div>
                    <div class="modal-body modal-body-aspirasi">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" style="font-size: 12px !important;" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            @foreach($aspirasi as $index => $row)
            <div class="col-md-4">
                <div class="card-aspirasi-{{ $index }} card h-100">
                    <div class="card-header bg-primary">
                        <div class="d-flex">

                            <div class="rounded-circle d-flex text-center" style="height: 50px;width: 50px; background-color: {!! Aspirasi::convertImage($row->nama)['background'] !!};">
                                <h6 class="mx-auto my-auto">{{ Aspirasi::convertImage($row->nama)['name'] }}</h6>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-white text-sm">
                                    @foreach(explode(' ', $row->nama) as $nm)
                                    @foreach(str_split($nm) as $inm => $n)
                                    @if($inm == 0)
                                    {{$n}}
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
                            "{{$row->pesan}}"
                        </h6>
                        <p style="font-size: 12px;" class="text-primary">#{{Aspirasi::SASARAN[$row->sasaran_aspirasi]}}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <small class="text-muted text-sm my-auto">
                            {{ date('d/m/Y H:i', strtotime($row->created_at)) }}
                        </small>
                        <div class="btn-group">
                            @if($row->balasan != null)
                            <button class="btn btn-sm btn-primary py-1 px-1 btn-aspirasi" data-index="{{ $index }}" data-tanggal="{{ date('d/m/Y H:i', strtotime($row->updated_at)) }}" data-balasan="{{ $row->balasan }}" data-backdrop="static" data-toggle="modal" data-target="#AspirasiModal" style="font-size: 10px">Balasan</button>
                            @endif
                            @if($row->lampiran != null)
                            <a href="{{ asset('galeri/' . $row->lampiran) }}" target="_blank" class="btn btn-sm btn-secondary py-1 px-1" style="font-size: 10px">Lampiran</a>
                            @endif
                        </div>
                    </div>
                </div>
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

        $('.modal-body-aspirasi').html(`
        <div class="card">
            ${$('.card-aspirasi-' + index).html()}
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