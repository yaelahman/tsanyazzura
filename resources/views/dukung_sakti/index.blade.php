@extends('layouts/app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Data Pendukung</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pendukung</li>
                        </ol>
                    </nav>
                </div>
            </div>
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
                <h4 class="card-title mb-3">Data Pendukung</h4>
                <div class="table-responsive">
                    <table id="datatable1" class="table user-table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No.</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">WhatsApp</th>
                                <th class="border-top-0">Jenis Kelamin</th>
                                <th class="border-top-0">Tanggal Lahir</th>
                                <th class="border-top-0">Kelurahan</th>
                                <th class="border-top-0">Alamat</th>
                                <th class="border-top-0">RT/RW</th>
                                <th class="border-top-0">Tim Sukses</th>
                                <th class="border-top-0">Nama Koordinator</th>
                                <th class="border-top-0">No TPS</th>
                                <th class="border-top-0">Tanggal Gabung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dukung_sakti as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->whatsapp }}</td>
                                    <td>{{ $row->jenis_kelamin == 'L' ? 'Laki Laki' : 'Perempuan' }}</td>
                                    <td>{{ date('d-m-Y', strtotime($row->tanggal_lahir)) }}</td>
                                    <td>{{ $row->wilayah }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->rt }}/{{ $row->rw }}</td>
                                    <td>{{ $row->tim_sukses }}</td>
                                    <td>{{ $row->koordinator }}</td>
                                    <td>{{ $row->tps }}</td>
                                    <td>{{ date('d-m-Y H:i', strtotime($row->created_at)) }}</td>
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
@endsection
@section('script')
    <script type="text/javascript">
        $('.button-delete').click(function() {
            var id = $(this).attr('data-id');
            var form = $('#form-delete');
            form.attr('action', "{{ url('/admin/prodi') }}/" + id);

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
