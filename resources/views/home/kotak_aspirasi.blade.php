@extends('home.layouts')
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
                                        <option value="0">Akademik</option>
                                        <option value="0">Fasilitas</option>
                                        <option value="0">UKT</option>
                                        <option value="0">Pengawasan Eksekutif Mahasiswa</option>
                                        <option value="0">Kebijakan Kampus (Rektorat)</option>
                                        <option value="0">Kesejahteraan Mahasiswa</option>
                                        <option value="0">UKM</option>
                                        <option value="0">Layanan Umum UB</option>
                                        <option value="0">Kerja Sama</option>
                                        <option value="0">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Sasaran Aspirasi</label>
                                    <select name="sasaran_aspirasi" id="sasaran_aspirasi" class="form-control" required>
                                        <option value="0">DEWAN PERWAKILAN MAHASISWA UB</option>
                                        <option value="0">EKSEKUTIF MAHASISWA UB</option>
                                        <option value="0">Wakil Rektor Bidang Akademik</option>
                                        <option value="0">Wakil Rektor Bidang Keuangan dan Sumber Daya</option>
                                        <option value="0">Wakil Rektor Bidang Kemahasiswaan, Alumni dan Kewirausahaan
                                            Mahasiswa</option>
                                        <option value="0">Wakil Rektor Bidang Perencanaan, Kerjasama, dan
                                            Internasionalisasi</option>
                                        <option value="0">Wakil Rektor Bidang Riset dan Inovasi</option>
                                        <option value="0">Sekretaris Universitas</option>
                                        <option value="0">DEKANAT FAKULTAS ILMU ADMINSITRASI</option>
                                        <option value="0">Lainnya</option>
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
                            <button type="button" class="btn btn-primary" style="font-size: 12px !important;">Save
                                changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-4">
            @foreach($aspirasi as $row) 
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="d-flex">
                            <img src="" alt="" class="img-thumbnail">
                            <div class="ms-2">
                                <h6 class="text-white text-sm">Nama</h6>
                                <h6 class="text-white text-xs">*****</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6>
                            Aspirasi
                        </h6>
                    </div>
                    <div class="card-footer">
                        <p class="text-muted text-sm">
                            08-10-2002 17.12
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- container -->
</section>
@endsection