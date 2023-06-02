@extends('home.layouts')
@section('content')
<div id="blog" class="latest-news-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content pt-4">
                        <h2 class="fw-bold">Lapak Sakti</h2>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4">
            @foreach ($products as $index => $item)
            <div class="col mb-4 row-product" id="{{ strtolower(str_replace(' ', '-', $item->name)) }}">
                <div class="card h-100 card-product">
                    <button class="btn btn-light btn-card btn-order" data-toggle="modal" data-target="#quikOrderModal" data-id="{{ $item->id }}" data-whatsapp="{{ $item->whatsapp }}" data-name="{{ $item->name }}" data-image="{{ $item->Image->image }}">
                        <i class="bi bi-send-check-fill"></i>&nbsp;
                        Quick Order
                    </button>
                    <img src="{{ asset('products/' . $item->Image->image) }}" width="200px" height="200px" class="card-img-top image-product" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $item->name }}</h5>
                        <p class="card-text text-center mb-0 pb-0">*Harga hubungi CS</p>
                        <p class="card-text text-center mt-0 text-success"><i class="bi bi-check"></i>
                            Ready
                            Stock
                        </p>
                    </div>
                    <div class="card-footer p-0">
                        <button class="btn btn-primary w-100 rounded-0 btn-hubungi btn-order" data-toggle="modal" data-target="#quikOrderModal" data-id="{{ $item->id }}" data-whatsapp="{{ $item->whatsapp }}" data-name="{{ $item->name }}" data-image="{{ $item->Image->image }}">Hubungi
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
</script>
@endsection