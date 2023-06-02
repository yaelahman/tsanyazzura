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
        <div class="text-left mb-4 border-bottom">
            <h4>{{ $product->name }}</h4>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div id="productCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($product->ImageAll as $index => $item)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('products/' . $item->image) }}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#productCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#productCarousel" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="col mb-4">
                <h6>Deskripsi Produk</h6>
                <p>{{ $product->description }}</p>
            </div>
        </div>
        <button class="btn btn-dark w-100 btn-order" data-toggle="modal" data-target="#quikOrderModal" data-id="{{ $item->id }}" data-whatsapp="{{ $product->whatsapp }}" data-name="{{ $product->name }}" data-image="{{ $product->Image->image }}"><i class="bi bi-bag-check"></i> ORDER SEKARANG</button>
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