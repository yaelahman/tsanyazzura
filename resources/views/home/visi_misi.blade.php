@extends('home.layouts')
@section('content')
<section class="about-area about-five">
    <div class="container">
        <div class="row mb-2">
            <h3 class="text-center text-primary mb-3">Misi</h3>

            <ul class="list-group mb-0 mx-5">
                @foreach($misi as $index => $row)
                <li class="mb-2 list-group-item d-flex align-items-center border-0 mb-0 rounded"
                    style="background-color: #f4f6f7;">
                    <span class="badge bg-primary me-2">{{ $index + 1 }}</span>
                    {{$row->name}}
                </li>
                @endforeach
            </ul>
        </div>
        <div class="row mb-4">
            <h3 class="text-center text-primary mb-3">Visi</h3>

            <ul class="list-group mb-0 mx-5">
                @foreach($visi as $index => $row)
                <li class="mb-2 list-group-item d-flex align-items-center border-0 mb-0 rounded"
                    style="background-color: #f4f6f7;">
                    <span class="badge bg-primary me-2">{{ $index + 1 }}</span>
                    {{$row->name}}
                </li>
                @endforeach
            </ul>
        </div>
        <div class="row mb-4">
            <h3 class="text-center text-primary mb-3">Program Kerja</h3>

            <ul class="list-group mb-0 mx-5">
                @foreach($program_kerja as $index => $row)
                <li class="mb-2 list-group-item d-flex align-items-center border-0 mb-0 rounded"
                    style="background-color: #f4f6f7;">
                    <span class="badge bg-primary me-2">{{ $index + 1 }}</span>
                    {{$row->name}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- container -->
</section>
@endsection