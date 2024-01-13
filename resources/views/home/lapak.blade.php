@extends('home.layouts')
@section('css')
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <!-- <link href="/template/assets/css/style.min.css" rel="stylesheet"> -->
@endsection
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                alt="">
            <div id="overlay"></div>
        </div>

    </section>
    <div id="blog" class="latest-news-area section">
        <div class="mx-auto text-center">
            <h2 class="fw-bold">Lapak Sakti</h2>
            <div class="mb-5">
                <div class="light-rounded-buttons">
                    <a href="javascript:void(0)" data-backdrop="static" data-toggle="modal" data-target="#addProductModal"
                        class="btn btn-primary text-sm">Daftarkan
                        Produkmu Disini Bolo</a>
                </div>
            </div>
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4">
                @foreach ($products as $index => $item)
                    <div class="col mb-4 row-product" id="{{ strtolower(str_replace(' ', '-', $item->name)) }}">
                        <div class="card h-100 card-product">
                            <button class="btn btn-light btn-card btn-order" data-toggle="modal"
                                data-target="#quikOrderModal" data-id="{{ $item->id }}"
                                data-whatsapp="{{ $item->whatsapp }}" data-name="{{ $item->name }}"
                                data-image="{{ $item->Image->image }}">
                                <i class="bi bi-send-check-fill"></i>&nbsp;
                                Quick Order
                            </button>
                            <img src="{{ asset('products/' . $item->Image->image) }}" width="200px" height="200px"
                                class="card-img-top image-product" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item->name }}</h5>
                                <p class="card-text text-center mb-0 pb-0">*Harga hubungi CS</p>
                                <p class="card-text text-center mt-0 text-success"><i class="bi bi-check"></i>
                                    Ready
                                    Stock
                                </p>
                            </div>
                            <div class="card-footer p-0">
                                <button class="btn btn-primary w-100 rounded-0 btn-hubungi btn-order" data-toggle="modal"
                                    data-target="#quikOrderModal" data-id="{{ $item->id }}"
                                    data-whatsapp="{{ $item->whatsapp }}" data-name="{{ $item->name }}"
                                    data-image="{{ $item->Image->image }}">Hubungi
                                    Kami</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="modal fade" id="quikOrderModal" tabindex="-1" aria-labelledby="quikOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="quikOrderModalLabel">Nama Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-2 row-cols-md-">
                            <div class="col">
                                <img src="#" height="250px" width="250px" class="imageee img-thumbnail">
                            </div>
                            <div class="col">
                                <a href="#" class="whatsapp btn btn-success w-100 mb-2" target="_blank">
                                    <i class="bi bi-whatsapp"></i> Whatsapp
                                </a>
                                <a href="#" class="detail btn btn-dark w-100">
                                    <i class="bi bi-eye-fill"></i> Lihat Detail Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title-product" id="addProductLabel">Tambah Product</h5>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-material mx-2" method="post"
                            action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="full_name" class="form-control" required id="floatingInput"
                                    placeholder="">
                                <label for="floatingInput">Nama Lengkap <small class="text-danger">*</small></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nim" class="form-control" required id="floatingInput"
                                    placeholder="">
                                <label for="floatingInput">Alamat Produk <small class="text-danger">*</small></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" required id="floatingInput"
                                    placeholder="">
                                <label for="floatingInput">Nama Produk <small class="text-danger">*</small></label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea cols="30" rows="10" name="description" class="form-control" required id="floatingInput"
                                    placeholder=""></textarea>
                                <label for="floatingInput">Deskripsi Produk <small class="text-danger">*</small></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" name="whatsapp" class="form-control" required id="floatingInput"
                                    placeholder="">
                                <label for="floatingInput">Nomor WhatsApp <small class="text-danger">*</small></label>
                            </div>

                            <button type="button" class="btn btn-primary addImageButton" style="font-size: 10px;"><i
                                    class="fas fa-plus"></i>&nbsp;Tambah
                                Gambar
                                Produk</button>

                            <div class="file-form-list"></div>
                            <div class="form-group mt-3">
                                <div class="col-sm-12 d-flex gap-2">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white"
                                        style="font-size: 10px;">Save Product</button>
                                    <button class="btn btn-danger mx-auto mx-md-0 text-white" type="button"
                                        class="close" data-dismiss="modal" style="font-size: 10px;">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.btn-order').on('click', function() {
            var id = $(this).attr('data-id')
            var whatsapp = $(this).attr('data-whatsapp')
            var image = $(this).attr('data-image')
            var name = $(this).attr('data-name')

            $('.whatsapp').attr('href', 'http://wa.me/62' + whatsapp)
            $('.detail').attr('href', "{{ url('lapak') }}/" + id)
            $('.imageee').attr('src', "{{ asset('products') }}/" + image)
            $('.modal-title').html(name)
        })

        let index = 0
        $('.addImageButton').on('click', function() {
            $('.file-form-list').append(`
            <div class="row form-image-${index}">
                <div class="col-sm-6">
                    <div class="form-group mt-3">
                        <div class="col-md-12">
                            <input type="file" id="image" onchange="preview(${index})" name="image[]" required
                                class="form-control ps-0 form-control-line">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="btn-group">
                        <a href="#" class="btn btn-info mt-3 d-none lihat-gambar-${index}" target="_blank"><i class="fas fa-eye"></i>&nbsp;Lihat
                            Gambar</a>
                        &nbsp;
                        <button type="button" class="btn btn-danger mt-3" onclick="deleteFormImage(${index})" style="font-size: 10px;"><i class="fas fa-trash"></i>&nbsp;Hapus
                            Gambar</button>
                    </div>
                </div>
            </div>
            `)
            index++
        })

        function preview(index) {
            console.log(event.target.files)
            $('.lihat-gambar-' + index).removeClass('d-none')
            $('.lihat-gambar-' + index).attr('href', URL.createObjectURL(event.target.files[0]))
        }

        $('#image').on('change', function(e) {
            console.log(e.target.files[0])
        })

        function deleteFormImage(indexNow) {
            $('.form-image-' + indexNow).remove()
        }
    </script>
@endsection
