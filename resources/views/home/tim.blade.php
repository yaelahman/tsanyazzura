@extends('home.layouts')
@section('content')
<div id="blog" class="latest-news-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content pt-4">
                        <h2 class="fw-bold">Tim</h2>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        @if($kepala)
        <div class="row">
            <div class="offset-lg-4 col-lg-4 col-md-4 col-12 px-5 px-sm-2 mb-4 mb-4">
                <!-- Single News -->
                <div class="single-news">
                    <div class="image">
                        <a href="javascript:void(0)"><img class="thumb" src="{{ asset('galeri/' . $kepala->image) }}"
                                alt="Blog" /></a>
                    </div>
                    <div class="content-body">
                        <h4 class="title">
                            <a href="javascript:void(0)"> {{$kepala->name}}</a>
                        </h4>
                        <p>
                            {{$kepala->jabatan}}
                        </p>
                    </div>
                </div>
                <!-- End Single News -->
            </div>
        </div>
        @endif
        <div class="row justify-content-center">
            @foreach($tim as $row)
            <div class="col-lg-3 col-md-4 col-12 px-5 px-sm-2 mb-4">
                <!-- Single News -->
                <div class="single-news">
                    <div class="image">
                        <a href="javascript:void(0)"><img class="thumb" src="{{ asset('galeri/' . $row->image) }}"
                                alt="Blog" /></a>
                    </div>
                    <div class="content-body">
                        <h4 class="title">
                            <a href="javascript:void(0)"> {{$row->name}} </a>
                        </h4>
                        <p>
                            {{$row->jabatan}}
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