@extends('layouts/app')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Aspirasi</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Aspirasi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('visi-misi.create') }}" class="btn btn-success d-none d-md-inline-block text-white">
                        <i class="fas fa-plus"></i>&nbsp;
                        Add Visi Misi</a>
                </div>
            </div> -->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    @if (Session::has('alert'))
    <div class="alert alert-{{ Session::get('alert') }}">
        {{ Session::get('message') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">Data Aspirasi</h4>
            <div class="table-responsive">
                <table id="datatable1" class="table user-table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">No.</th>
                            <th class="border-top-0">Prodi</th>
                            <th class="border-top-0">Angkatan</th>
                            <th class="border-top-0">pesan</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aspirasi as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->angkatan ?? '-' }}</td>
                            <td>{{ $row->pesan ?? '-' }}</td>
                            <td>
                                <button data-bs-toggle="modal" data-bs-target="#modalBalasan" data-id="{{ $row->id }}" onclick="let id = this.getAttribute('data-id'); $('#id-aspirasi').val(id); $('#balasan').val(this.getAttribute('data-balasan'))" data-balasan="{{ $row->balasan }}" class="btn btn-warning btn-sm btn-flat mr-2"><i class="fas fa-pencil-alt"></i>
                                    Balas</button>
                                <button class="button-delete btn btn-danger btn-sm btn-flat mr-2" data-id="{{ $row->id }}" style="color: white"><i class="fas fa-trash-alt"></i> Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form id="form-delete" action="" method="post" class="d-none">
        @csrf
        @method('delete')
    </form>
</div>

<div class="modal fade border-primary" id="modalBalasan" tabindex="-1" role="dialog" aria-labelledby="modalBalasanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBalasanLabel">Balas Aspirasi</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('aspirasi.balas') }}" method="POSt" id="form-balasan">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id-aspirasi">
                    <div class="form-group mb-2">
                        <label for="">Balasan</label>
                        <textarea placeholder="balasan" name="balasan" id="balasan" class="form-control" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="font-size: 12px !important;" data-bs-dismiss="modal">Close</button>
                <button type="submit" onclick="$('#form-balasan').submit(); $('#form-balasan').reset()" class="btn btn-primary" style="font-size: 12px !important;">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('.button-delete').click(function() {
        var id = $(this).attr('data-id');
        var form = $('#form-delete');
        form.attr('action', "{{ url('/admin/aspirasi') }}/" + id);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                form.submit()
            }
        })
    });
</script>
@endsection