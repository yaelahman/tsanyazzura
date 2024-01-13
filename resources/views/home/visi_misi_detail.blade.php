@extends('home.layouts')
@section('content')
    <section id="jumbotron" class="container">
        <div class="text-center image">
            <img src=" {{ asset('new') }}/assets/img/logo.webp" width="100%" style="max-width: 400px" class="mx-auto"
                alt="">
            <div id="overlay"></div>
        </div>

    </section>
    <section class="about-area about-five w-100">
        <div class="container">
            <h1 class="text-center text-primary mb-3">Misi</h1>
            <div class="row mb-4">
                <div class="col-md-8">

                    <div class="text-start">
                        <h3 class="fw-bold mb-0">{{ $misi->title }}</h3>
                    </div>
                    <div class="mb-3 mt-2 px-3">
                        {!! $misi->text !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-4 border-0 py-0" style="background-color: #F6F6F6">
                        <div class="card-body border-0 text-center py-1">
                            <a href="{{ $settings['link_unduhan'] }}" target="_blank" class="btn btn-sm mx-auto"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none">
                                    <path
                                        d="M21.5 14.25C21.5 14.4489 21.421 14.6397 21.2803 14.7803C21.1397 14.921 20.9489 15 20.75 15H18.5V16.5H20C20.1989 16.5 20.3897 16.579 20.5303 16.7197C20.671 16.8603 20.75 17.0511 20.75 17.25C20.75 17.4489 20.671 17.6397 20.5303 17.7803C20.3897 17.921 20.1989 18 20 18H18.5V19.5C18.5 19.6989 18.421 19.8897 18.2803 20.0303C18.1397 20.171 17.9489 20.25 17.75 20.25C17.5511 20.25 17.3603 20.171 17.2197 20.0303C17.079 19.8897 17 19.6989 17 19.5V14.25C17 14.0511 17.079 13.8603 17.2197 13.7197C17.3603 13.579 17.5511 13.5 17.75 13.5H20.75C20.9489 13.5 21.1397 13.579 21.2803 13.7197C21.421 13.8603 21.5 14.0511 21.5 14.25ZM9.125 16.125C9.125 16.8212 8.84844 17.4889 8.35616 17.9812C7.86387 18.4734 7.19619 18.75 6.5 18.75H5.75V19.5C5.75 19.6989 5.67098 19.8897 5.53033 20.0303C5.38968 20.171 5.19891 20.25 5 20.25C4.80109 20.25 4.61032 20.171 4.46967 20.0303C4.32902 19.8897 4.25 19.6989 4.25 19.5V14.25C4.25 14.0511 4.32902 13.8603 4.46967 13.7197C4.61032 13.579 4.80109 13.5 5 13.5H6.5C7.19619 13.5 7.86387 13.7766 8.35616 14.2688C8.84844 14.7611 9.125 15.4288 9.125 16.125ZM7.625 16.125C7.625 15.8266 7.50647 15.5405 7.2955 15.3295C7.08452 15.1185 6.79837 15 6.5 15H5.75V17.25H6.5C6.79837 17.25 7.08452 17.1315 7.2955 16.9205C7.50647 16.7095 7.625 16.4234 7.625 16.125ZM15.875 16.875C15.875 17.7701 15.5194 18.6285 14.8865 19.2615C14.2535 19.8944 13.3951 20.25 12.5 20.25H11C10.8011 20.25 10.6103 20.171 10.4697 20.0303C10.329 19.8897 10.25 19.6989 10.25 19.5V14.25C10.25 14.0511 10.329 13.8603 10.4697 13.7197C10.6103 13.579 10.8011 13.5 11 13.5H12.5C13.3951 13.5 14.2535 13.8556 14.8865 14.4885C15.5194 15.1215 15.875 15.9799 15.875 16.875ZM14.375 16.875C14.375 16.3777 14.1775 15.9008 13.8258 15.5492C13.4742 15.1975 12.9973 15 12.5 15H11.75V18.75H12.5C12.9973 18.75 13.4742 18.5525 13.8258 18.2008C14.1775 17.8492 14.375 17.3723 14.375 16.875ZM4.25 10.5V3.75C4.25 3.35218 4.40804 2.97064 4.68934 2.68934C4.97064 2.40804 5.35218 2.25 5.75 2.25H14.75C14.8485 2.24992 14.9461 2.26926 15.0371 2.3069C15.1282 2.34454 15.2109 2.39975 15.2806 2.46938L20.5306 7.71938C20.6003 7.78908 20.6555 7.87182 20.6931 7.96286C20.7307 8.05391 20.7501 8.15148 20.75 8.25V10.5C20.75 10.6989 20.671 10.8897 20.5303 11.0303C20.3897 11.171 20.1989 11.25 20 11.25C19.8011 11.25 19.6103 11.171 19.4697 11.0303C19.329 10.8897 19.25 10.6989 19.25 10.5V9H14.75C14.5511 9 14.3603 8.92098 14.2197 8.78033C14.079 8.63968 14 8.44891 14 8.25V3.75H5.75V10.5C5.75 10.6989 5.67098 10.8897 5.53033 11.0303C5.38968 11.171 5.19891 11.25 5 11.25C4.80109 11.25 4.61032 11.171 4.46967 11.0303C4.32902 10.8897 4.25 10.6989 4.25 10.5ZM15.5 7.5H18.1897L15.5 4.81031V7.5Z"
                                        fill="#2E74FC"></path>
                                </svg>
                                <span class="text-primary px-1">Unduh TSANY Visi Misi.pdf</span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none">
                                    <path
                                        d="M5.21938 11.0306C5.07864 10.8899 4.99958 10.699 4.99958 10.5C4.99958 10.301 5.07864 10.1101 5.21938 9.96937C5.36011 9.82864 5.55098 9.74958 5.75 9.74958C5.94902 9.74958 6.13989 9.82864 6.28062 9.96937L11.75 15.4397V3C11.75 2.80109 11.829 2.61032 11.9697 2.46967C12.1103 2.32902 12.3011 2.25 12.5 2.25C12.6989 2.25 12.8897 2.32902 13.0303 2.46967C13.171 2.61032 13.25 2.80109 13.25 3V15.4397L18.7194 9.96937C18.7891 9.89969 18.8718 9.84442 18.9628 9.8067C19.0539 9.76899 19.1515 9.74958 19.25 9.74958C19.3485 9.74958 19.4461 9.76899 19.5372 9.8067C19.6282 9.84442 19.7109 9.89969 19.7806 9.96937C19.8503 10.0391 19.9056 10.1218 19.9433 10.2128C19.981 10.3039 20.0004 10.4015 20.0004 10.5C20.0004 10.5985 19.981 10.6961 19.9433 10.7872C19.9056 10.8782 19.8503 10.9609 19.7806 11.0306L13.0306 17.7806C12.961 17.8504 12.8783 17.9057 12.7872 17.9434C12.6962 17.9812 12.5986 18.0006 12.5 18.0006C12.4014 18.0006 12.3038 17.9812 12.2128 17.9434C12.1217 17.9057 12.039 17.8504 11.9694 17.7806L5.21938 11.0306ZM20.75 19.5H4.25C4.05109 19.5 3.86032 19.579 3.71967 19.7197C3.57902 19.8603 3.5 20.0511 3.5 20.25C3.5 20.4489 3.57902 20.6397 3.71967 20.7803C3.86032 20.921 4.05109 21 4.25 21H20.75C20.9489 21 21.1397 20.921 21.2803 20.7803C21.421 20.6397 21.5 20.4489 21.5 20.25C21.5 20.0511 21.421 19.8603 21.2803 19.7197C21.1397 19.579 20.9489 19.5 20.75 19.5Z"
                                        fill="#2E74FC"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="my-2">
                        <h3>Daftar Misi</h3>
                    </div>
                    <div class="card rounded-4 border-0" style="background-color: #F6F6F6">
                        <div class="card-body border-0">
                            @foreach ($allMisi as $index => $item)
                                <div class="border-bottom d-flex justify-content-between">
                                    <div class="py-1">
                                        <h5 class="mb-0">MISI 0{{ $index + 1 }}</h5>
                                        <p class="py-1 mb-0 text-xs">{{ $item->title }}</p>
                                    </div>
                                    <div class="mb-auto">
                                        <a href="{{ route('landing.visi_misi.detail', ['slug' => $item->slug]) }}"
                                            class="btn btn-primary btn-sm rounded-4 text-nowrap mt-2">
                                            <i class="fas fa-scroll"></i> Detail
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
@endsection
