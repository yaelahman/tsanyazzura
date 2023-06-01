@extends('layouts/app')
@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Settings</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                <h4 class="card-title mb-3">Data Settings</h4>
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($settings as $item)
                    <input type="hidden" name="type[]" value="{{$item->type}}">
                    @if($item->type == 'file')
                    <div class="row">
                        
                        <div class="col-sm-6 mt-3">
                            <div class="form-group mt-3">
                                <div class="col-md-12">
                                    <input type="file" id="image" onchange="preview(1)" name="image"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="btn-group">
                                <a href="{{ asset('galeri/' . $item->text) }}"
                                    class="btn btn-info mt-3 lihat-gambar-1" target="_blank"><i
                                        class="fas fa-eye"></i>&nbsp;Lihat
                                    Gambar</a>
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="kolom[]" class="form-control" value="{{ $item->text }}">
                    @elseif($item->type == 'textarea')
                    <textarea name="kolom[]" cols="30" rows="10" class="form-control">{{ $item->text }}</textarea>
                    @else
                    <div class="form-group">
                        <label for="">{{ $item->title }}</label>
                        <input type="text" name="kolom[]" class="form-control" value="{{ $item->text }}">
                    </div>
                    @endif
                        <input type="hidden" name="id[]" value="{{ $item->id }}">
                    @endforeach
                    <button type="submit" class="btn btn-warning w-100 mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('.button-delete').click(function() {
            var id = $(this).attr('data-id');
            var form = $('#form-delete');
            form.attr('action', "{{ url('/admin/category') }}/" + id);

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

        
        function preview(index) {
            console.log(event.target.files)
            $('.lihat-gambar-' + index).removeClass('d-none')
            $('.lihat-gambar-' + index).attr('href', URL.createObjectURL(event.target.files[0]))
        }
    </script>
@endsection
