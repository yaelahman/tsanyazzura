@extends('layouts/app')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Visi Misi</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <div class="text-end upgrade-btn">
                <a href="{{ route('visi-misi.index') }}"
                    class="btn btn-success d-none d-md-inline-block text-white">
                    <i class="fas fa-bars"></i>&nbsp;
                    List Visi Misi</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal form-material mx-2" method="post" action="{{ route('visi-misi.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Name</label>
                            <input type="text" id="name" name="name" required placeholder="Visi Misi"
                                class="form-control ps-0 form-control-line">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Tipe</label>
                            <select name="type" class="form-control ps-0 form-control-line" required>
                                <option value="0">Misi</option>
                                <option value="1" selected>Visi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 d-flex">
                        <button class="btn btn-success mx-auto mx-md-0 text-white">Save Visi Misi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection