<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>Tsany | Home</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/favicon.svg" type="image/svg" />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lineicons.css" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/tiny-slider.css" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/glightbox.min.css" />

    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!--====== NAVBAR NINE PART START ======-->

    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <!-- <img src="assets/images/white-logo.svg" alt="Logo" /> -->
                            <h3 class="text-white">TA</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/index.html">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/tentang.html">Tentang</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/visi_misi.html">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/kotak_aspirasi.html">Kotak Aspirasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/warta.html">Warta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/tim.html">Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/lapak.html">Lapak SAKTI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/desa.html">i-Desa</a>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-lg-inline-block">
                            <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== NAVBAR NINE PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->

    <div class="sidebar-left">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo">
                <a href="index.html"><img src="assets/images/logo.svg" alt="Logo" /></a>
            </div>
            <p class="text">Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</p>
            <!-- logo -->
            <div class="sidebar-menu">
                <h5 class="menu-title">Quick Links</h5>
                <ul>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li><a href="javascript:void(0)">Our Team</a></li>
                    <li><a href="javascript:void(0)">Latest News</a></li>
                    <li><a href="javascript:void(0)">Contact Us</a></li>
                </ul>
            </div>
            <!-- menu -->
            <div class="sidebar-social align-items-center justify-content-center">
                <h5 class="social-title">Follow Us On</h5>
                <ul>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><i class="lni lni-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <!-- sidebar social -->
        </div>
        <!-- content -->
    </div>
    <div class="overlay-left"></div>

    <!--====== SIDEBAR PART ENDS ======-->

    <!--====== ABOUT FIVE PART START ======-->

    <section class="about-area about-five">
        <div class="container">
            <h3 class="text-center text-primary mb-5">Kotak Aspirasi</h3>
            <div class="mb-5">
                <div class="light-rounded-buttons">
                    <a href="javascript:void(0)" data-backdrop="static" data-toggle="modal" data-target="#exampleModal"
                        class="btn primary-btn-outline text-sm">+ Aspirasi</a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade border-primary" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Aspirasi</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group mb-2">
                                    <label for="">Nama</label>
                                    <input type="text" placeholder="Nama" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">NIM</label>
                                    <input type="text" placeholder="NIM" name="nim" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Prodi</label>
                                    <input type="text" placeholder="Prodi" name="prodi" class="form-control" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Angkatan</label>
                                    <input type="text" placeholder="Angkatan" name="angkatan" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Lingkup Aspirasi</label>
                                    <select name="lingkup_aspirasi" id="lingkup_aspirasi" class="form-control" required>
                                        <option value="0">Sarana Prasarana</option>
                                        <option value="0">Akademik</option>
                                        <option value="0">Fasilitas</option>
                                        <option value="0">UKT</option>
                                        <option value="0">Pengawasan Eksekutif Mahasiswa</option>
                                        <option value="0">Kebijakan Kampus (Rektorat)</option>
                                        <option value="0">Kesejahteraan Mahasiswa</option>
                                        <option value="0">UKM</option>
                                        <option value="0">Layanan Umum UB</option>
                                        <option value="0">Kerja Sama</option>
                                        <option value="0">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Sasaran Aspirasi</label>
                                    <select name="sasaran_aspirasi" id="sasaran_aspirasi" class="form-control" required>
                                        <option value="0">DEWAN PERWAKILAN MAHASISWA UB</option>
                                        <option value="0">EKSEKUTIF MAHASISWA UB</option>
                                        <option value="0">Wakil Rektor Bidang Akademik</option>
                                        <option value="0">Wakil Rektor Bidang Keuangan dan Sumber Daya</option>
                                        <option value="0">Wakil Rektor Bidang Kemahasiswaan, Alumni dan Kewirausahaan
                                            Mahasiswa</option>
                                        <option value="0">Wakil Rektor Bidang Perencanaan, Kerjasama, dan
                                            Internasionalisasi</option>
                                        <option value="0">Wakil Rektor Bidang Riset dan Inovasi</option>
                                        <option value="0">Sekretaris Universitas</option>
                                        <option value="0">DEKANAT FAKULTAS ILMU ADMINSITRASI</option>
                                        <option value="0">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Pesan</label>
                                    <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" required
                                        placeholder="Pesan Aspirasi"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Lampiran <small class="text-small text-danger">*Jika ada</small>
                                    </label>
                                    <div class="custom-file border">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="font-size: 12px !important;"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" style="font-size: 12px !important;">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="d-flex">
                                <img src="" alt="" class="img-thumbnail">
                                <div class="ms-2">
                                    <h6 class="text-white text-sm">Nama</h6>
                                    <h6 class="text-white text-xs">*****</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>
                                Aspirasi
                            </h6>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted text-sm">
                                08-10-2002 17.12
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>
    <!-- Start Footer Area -->
    <footer class="footer-area footer-eleven">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo.svg" alt="#" class="img-fluid" />
                                    </a>
                                </div>
                                <p>
                                    Making the world a better place through constructing elegant
                                    hierarchies.
                                </p>
                                <p class="copyright-text">
                                    <span>© 2024 Ayro UI.</span>Designed and Developed by
                                    <a href="javascript:void(0)" rel="nofollow"> Ayro UI </a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-link">
                                <h5>Solutions</h5>
                                <ul>
                                    <li><a href="javascript:void(0)">Marketing</a></li>
                                    <li><a href="javascript:void(0)">Analytics</a></li>
                                    <li><a href="javascript:void(0)">Commerce</a></li>
                                    <li><a href="javascript:void(0)">Insights</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-link">
                                <h5>Support</h5>
                                <ul>
                                    <li><a href="javascript:void(0)">Pricing</a></li>
                                    <li><a href="javascript:void(0)">Documentation</a></li>
                                    <li><a href="javascript:void(0)">Guides</a></li>
                                    <li><a href="javascript:void(0)">API Status</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget newsletter">
                                <h5>Subscribe</h5>
                                <p>Subscribe to our newsletter for the latest updates</p>
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="EMAIL" placeholder="Email address" required="required" type="email" />
                                    <div class="button">
                                        <button class="sub-btn">
                                            <i class="lni lni-envelope"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!--====== js ======-->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script src="{{ asset('assets') }}/js/tiny-slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>

        //===== close navbar-collapse when a  clicked
        let navbarTogglerNine = document.querySelector(
            ".navbar-nine .navbar-toggler"
        );
        navbarTogglerNine.addEventListener("click", function () {
            navbarTogglerNine.classList.toggle("active");
        });

        // ==== left sidebar toggle
        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function () {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function () {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        // ===== navbar nine sideMenu
        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

        sideMenuLeftNine.addEventListener("click", function () {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

    </script>
</body>

</html>