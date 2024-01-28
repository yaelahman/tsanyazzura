@extends('layouts/app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Program Kerja</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Program Kerja</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('program-kerja.index') }}"
                        class="btn btn-success d-none d-md-inline-block text-white">
                        <i class="fas fa-bars"></i>&nbsp;
                        List Program Kerja</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material mx-2" method="post"
                    action="{{ route('program-kerja.update', ['program_kerja' => $program_kerja->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Point</label>
                        <input type="text" id="name" name="name" value="{{ $program_kerja->name }}" required
                            placeholder="Point" class="form-control ps-0 form-control-line">
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Judul</label>
                        <input type="text" id="title" name="title" value="{{ $program_kerja->title }}" required
                            placeholder="Judul" class="form-control ps-0 form-control-line">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Gambar</label>
                        <input type="file" id="image" onchange="preview(1)" name="image"
                            class="form-control ps-0 form-control-line">
                    </div>
                    <a href="{{ asset('galeri/' . $program_kerja->image) }}" class="btn btn-info my-3 lihat-gambar-1"
                        target="_blank"><i class="fas fa-eye"></i>&nbsp;Lihat
                        Gambar</a>
                    &nbsp;
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Isi Misi</label>
                        <textarea name="text" cols="30" rows="30" class="form-control" required>{{ $program_kerja->text }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 d-flex">
                            <button class="btn btn-success mx-auto mx-md-0 text-white">Save Program Kerja</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('textarea').summernote();
        })

        function preview(index) {
            console.log(event.target.files)
            $('.lihat-gambar-' + index).removeClass('d-none')
            $('.lihat-gambar-' + index).attr('href', URL.createObjectURL(event.target.files[0]))
        }
    </script>
@endsection
