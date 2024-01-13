@extends('home.layouts')
@section('content')
    <div id="blog" class="latest-news-area section">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content pt-4">
                            <h2 class="fw-bold">Galeri</h2>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row">
                @foreach ($galeri as $row)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single News -->
                        <div class="single-news">
                            <div class="image">
                                <a href="javascript:void(0)"><img class="thumb" width="100%"
                                        src="{{ asset('galeri/' . $row->image) }}" alt="Blog" /></a>
                            </div>
                            <div class="content-body">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-primary text-decoration-none">
                                        {{ $row->title }} </a>
                                </h4>
                                <p>
                                    {{ $row->text }}
                                </p>
                            </div>
                        </div>
                        <!-- End Single News -->
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
