@extends('layouts/app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Product</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('product.create') }}" class="btn btn-success d-none d-md-inline-block text-white">
                        <i class="fas fa-plus"></i>&nbsp;
                        Add Product</a>
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
                <h4 class="card-title mb-3">Data Product</h4>
                <div class="table-responsive">
                    <table id="datatable1" class="table user-table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No.</th>
                                <th class="border-top-0" width="10%">Image Product</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Whatsapp</th>
                                <th class="border-top-0">Stock</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm btn-modal-image" data-bs-toggle="modal"
                                            data-bs-target="#bs-example-modal-lg" data-id="{{ $row->id }}">
                                            Lihat
                                        </button>
                                    </td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->whatsapp }}</td>
                                    <td>{{ $row->stock }}</td>
                                    <td>
                                        <span
                                            class="btn btn-{{ $row->status == 1 ? 'success' : 'danger' }} btn-sm btn-flat"
                                            style="color: white; font-size: 12px">
                                            {{ $row->status == 1 ? 'ACTIVE' : 'NON-ACTIVE' }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('product.edit', ['product' => $row->id]) }}"
                                            class="btn btn-warning btn-sm btn-flat mr-2"><i class="fas fa-pencil-alt"></i>
                                            Edit</a>
                                        <button class="button-delete btn btn-danger btn-sm btn-flat mr-2"
                                            data-id="{{ $row->id }}" style="color: white"><i
                                                class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Gambar Produk
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <table class="table table-striped">
                            <tr>
                                <th>Gambar 1</th>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm" target="_blank">Lihat</a>
                                </td>
                            </tr>
                        </table> --}}

                        <div class="spinner-border text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="table-image"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="
                                  btn btn-light-danger
                                  text-danger
                                  font-weight-medium
                                  waves-effect
                                  text-start
                                "
                            data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
            form.attr('action', "{{ url('/admin/product') }}/" + id);

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

        $('.btn-modal-image').click(function() {
            let productId = $(this).attr('data-id')

            $.ajax({
                url: "{{ route('product.image') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    productId: productId
                }
            }).then((resp) => {
                $('.spinner-border').addClass('d-none')


                let kolom = ``


                resp.data.map((row, index) => {
                    kolom = `${kolom}<tr>
                        <th>Gambar ${index + 1}</th>
                        <td>  
                            <a href="{{ asset('products/${row.image}') }}" class="btn btn-primary name="OKE" target="_blank">Lihat</a>
                        </td>
                    </tr>`
                })

                $('.table-image').html(
                    `<table class="table table-striped table-child-image">${kolom}</table>`
                )
            }).catch((err) => {
                console.log(err)
            })
        })
    </script>
@endsection
