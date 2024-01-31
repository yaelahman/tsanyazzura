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
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Visi</h3>

                <div class="text-center my-3">
                    <h3>{{ $settings['visi'] }}</h3>
                </div>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Misi</h3>

                <ul class="list-group mb-0 px-3">
                    @foreach ($misi as $index => $row)
                        <a href="{{ route('landing.visi_misi.detail', ['slug' => $row->slug]) }}"
                            class="text-decoration-none">
                            <li class="mb-2 card-proker list-group-item d-md-flex justify-content-between align-items-center border-0 mb-0 rounded"
                                style="background-color: #f4f6f7;">
                                <div class="d-flex">
                                    <span class="badge bg-primary me-2 rounded-pill"
                                        style="height: 20px; width:20px">{{ $index + 1 }}</span>
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-0 fw-bold">{{ $row->name }}</h5>
                                        <h6 class="mb-0 fw-normal">{{ $row->title }}</h6>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Program Kerja</h3>

                <ul class="list-group mb-0 px-3">
                    @foreach ($program_kerja as $index => $row)
                        <a href="{{ route('landing.program_kerja.detail', ['slug' => $row->slug]) }}"
                            class="text-decoration-none">
                            <li class="mb-2 card-proker list-group-item d-md-flex justify-content-between align-items-center border-0 mb-0 rounded"
                                style="background-color: #f4f6f7;">
                                <div class="d-flex">
                                    <span class="badge bg-primary me-2 rounded-pill"
                                        style="height: 20px; width:20px">{{ $index + 1 }}</span>
                                    <div class="d-flex flex-column">
                                        <h5 class="mb-0 fw-bold">{{ $row->name }}</h5>
                                        <h6 class="mb-0 fw-normal">{{ $row->title }}</h6>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">ALUR PROGRAM DAYA JUANG SAKTI ASPIRATIF</h3>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Penjelasan Aspirasi
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>&nbsp;&nbsp;Alur program penjaringan aspirasi ini diawali dengan
                                    penjemputan aspirasi kepada Masyarakat Kota Blitar/konstituen.
                                    Program penjaringan ini dilaksanakan melalui 2 metode yaitu metode
                                    offline (tatap muka/pertemuan/dialog) dimana DPRD mendatangi
                                    secara langsung Masyarakat Kota Blitar untuk berdiskusi mengenai
                                    permasalahan yang ada sehingga permasalahan tersebut diketahui
                                    langsung oleh wakil rakyat. Metode kedua yaitu metode online
                                    dimana nanti akan memanfaatkan platform website, gform, dan
                                    whatsapp. Metode online ini guna mendukung percepatan
                                    penyerapan aspirasi dimana era saat ini sudah memasuki era digital
                                    untuk meningkatkan tingkat efektifitas dan efisiensi. Selain untuk
                                    meningkatkan efektifitas dan efisiensi, adanya platform yang
                                    disediakan untuk serap aspirasi online ini mendukung adanya serap
                                    aspirasi secara konvensional (offline) guna menyongsong era
                                    digitalisasi pelayanan publik di Kota Blitar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pengkajian Regulasi
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>&nbsp;&nbsp;Hal yang selanjutnya dilakukan adalah pengkajian regulasi
                                    yang meliputi formulasi regulasi untuk penyelesaian permasalahan
                                    yang ada di Kota Blitar. DPRD Kota Blitar sebagai lembaga legislasi
                                    sudah seharusnya mengeluarkan/membentuk regulasi yang sesuai
                                    dengan permasalahan prioritas di Kota Blitar untuk terus berbenah.
                                    Tentunya permasalahan prioritas tersebut menjadi fokus utama
                                    pembangunan Kota Blitar melelui pembentukan regulasi yang
                                    26
                                    berpihak kepada Masyarakat Kota Blitar. Bukan hanya formulasi
                                    regulasi, DPRD Kota Blitar juga harus peka terhadap regulasi yang
                                    sudah tidak relevan dengan keadaan saat ini, hal ini bisa dilakukan
                                    dengan melakukan reformulasi regulasi yang berkoordinasi dengan
                                    pihak terkait untuk pelaksanaan kebijakan yang lebih efektif dan
                                    efisien.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Pembahasan Anggaran
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>&nbsp;&nbsp;Setelah mendapat persetujuan oleh Dewan selanjutnya akan
                                    diadakan rapat pembahasan dengan OPD terkait untuk membahas
                                    mengenai program, anggaran, dan kelompok sasaran kebijakan
                                    tersebut. Hal ini merupakan satu hal yang sangat penting karena
                                    program, anggaran, dan kelompok sasaran kebijakan harus dibahas
                                    secara intensif demi efektifitas kebijakan yang akan diberlakukan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                Realisasi Program
                            </button>
                        </h2>
                        <div id="c4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>&nbsp;&nbsp;Selanjutnya setelah program, anggaran, dan kelompok
                                    sasaran telah disepakati/disetujui maka akan ada realisasi
                                    kebijakan. Dengan adanya perencanaan yang matang maka
                                    realisasi kebijakan ini dapat berjalan secara maksimal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                Pengawasan
                            </button>
                        </h2>
                        <div id="c5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>&nbsp;&nbsp;Dalam tahapan ini DPRD Kota Blitar harus melaksakan fungsi
                                    pengawasan dengan maksimal. hal yang pertama harus dilakukan
                                    adalah memahami ruang lingkup pengawasan dalam pelaksanaan
                                    kebijakan oleh DPRD Kota Blitar. Sebagaimana diamanatkan
                                    UndangUndang Republik Indonesia Nomor 17 Tahun 2014 adalah
                                    melaksanakan pengawasan terhadap pelaksanaan peraturan
                                    daerah dan Anggaran Pendapatan dan Belanja Daerah (APBD),
                                    27
                                    yang telah dibuat bersama dengan Kepala Daerah. Di dalam
                                    penjelasan umum undang undang tersebut diterangkan bahwa
                                    pengawasan terhadap pengelolaan APBD yang dilakukan oleh
                                    DPRD merupakan hak setiap anggota DPRD dalam rangka
                                    memperjuangkan kepentingan Masyarakat Kota Blitar, termasuk di
                                    daerah pemilihannya.

                                </p>
                                <p>&nbsp;&nbsp;Preliminary Control, Interim Control, dan Post Control adalah
                                    konsep dalam manajemen kontrol yang merujuk pada tahapantahapan pengendalian dalam
                                    siklus manajemen. Berikut adalah
                                    penjelasan singkat untuk setiap konsep tersebut:
                                </p>
                                <h6 class="fw-bold">a. Preliminary Control:</h6>
                                <p>
                                    &nbsp;&nbsp;Preliminary control merujuk pada tindakan pengendalian yang dilakukan
                                    sebelum suatu
                                    kegiatan dimulai atau proyek dimasuki tahap utama.
                                    Serta mencegah kemungkinan masalah dan kesalahan sejak awal. Memberikan kerangka kerja
                                    dan parameter awal untuk memastikan bahwa suatu kegiatan
                                    atau proyek dapat berjalan sesuai rencana.
                                </p>
                                <p>&nbsp;&nbsp;Contoh: Penetapan aturan, kebijakan, dan pedoman awal, perencanaan risiko,
                                    dan penilaian
                                    ketersediaan sumber daya.</p>

                                <h6 class="fw-bold">b. Interim Control:</h6>
                                <p>
                                    &nbsp;&nbsp;Interim control terjadi selama pelaksanaan suatu kegiatan atau proyek, di
                                    antara tahap
                                    awal dan penyelesaian. Memastikan bahwa proyek atau kegiatan
                                    tetap sesuai dengan rencana, mengidentifikasi masalah atau deviasi segera, dan mengambil
                                    tindakan korektif sebelum masalah menjadi lebih besar.
                                </p>
                                <p>&nbsp;&nbsp;Pemantauan berkala terhadap progres proyek, analisis varian antara rencana
                                    dan kinerja
                                    aktual, dan peninjauan rutin.</p>

                                <h6 class="fw-bold">c. Post Control:</h6>
                                <p>
                                    &nbsp;&nbsp;Post control terjadi setelah suatu kegiatan atau proyek selesai. Ini
                                    melibatkan evaluasi
                                    kinerja dan pembelajaran dari pengalaman untuk perbaikan di
                                    masa depan. Menganalisis keseluruhan hasil dan kinerja, mengidentifikasi pembelajaran
                                    yang dapat diambil, dan menyusun rekomendasi atau perbaikan
                                    untuk proyek atau kegiatan berikutnya.
                                </p>
                                <p>&nbsp;&nbsp;Audit pasca-proyek, analisis return on investment (ROI), dan pembuatan
                                    laporan evaluasi.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                                Transparansi SAKTI
                            </button>
                        </h2>
                        <div id="c6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>&nbsp;&nbsp;Tahapan akhir dalam program ini adalah adanya akuntabilitas
                                    dan transparansi yang dipublikasi kepada Masyarakat Kota Blitar
                                    mengenai kebijakan yang telah dijalankan. Adanya transparansi ini
                                    diharapkan mampu meningkatkan tingkat kepercayaan Masyarakat
                                    Kota Blitar kepada lembaga pemerintah daerah yang juga dilibatkan
                                    sebagai subjek pembangunan dengan mekanisme bottom up.</p>
                                <p>&nbsp;&nbsp;Permasalahan di tiaptiap klaster/bidang harus berangkat dari
                                    aspirasi Masyarakat Kota Blitar. Aspirasi tersebut dikaji oleh DPRD
                                    berdasarkan regulasi (terutama Peraturan Daerah/Peraturan Wali
                                    Kota). Aspirasi yang diterima harus diperkuat oleh legal
                                    standing/dasar hukum beserta anggaran daerah yang disetujui oleh
                                    DPRD. Aspirasi yang diwujudkan dalam bentuk program daerah
                                    akan lebih baik apabila bersifat timbal balik yaitu menambah
                                    income/pendapatan asli daerah (PAD). Selanjutnya,aspirasi yang
                                    diwujudkan dalam bentuk program daerah yang didukung dengan
                                    anggaran daerah maka harus direalisasikan secara transparan
                                    dengan pengawasan yang melibatkan Masyarakat Kota Blitar.
                                    Sehingga tercipta sistem Pemerintah Kota Blitar yang baik dan
                                    bersih.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <h3 class="text-center text-primary mb-3">Fokus Isu</h3>

                <div id="fokus-isu" class="mx-auto">
                    <div class="fokus-1 text-center" data-bs-toggle="modal" data-bs-target="#modalFokus1"><span
                            class="bg-white rounded-circle px-2 fs-5 text-primary">1</span>
                        <br> [Daya
                        berdaya
                        SAKTI]
                    </div>
                    <div class="fokus-2 text-center" data-bs-toggle="modal" data-bs-target="#modalFokus2"><span
                            class="bg-white rounded-circle px-2 fs-5 text-primary">2</span>
                        <br> [Daya kembang SAKTI]
                    </div>
                    <div class="fokus-3 text-center" data-bs-toggle="modal" data-bs-target="#modalFokus3"><span
                            class="bg-white rounded-circle px-2 fs-5 text-primary">3</span>
                        <br> [Daya Tumbuh SAKTI]
                    </div>
                    <div class="fokus-4 text-center" data-bs-toggle="modal" data-bs-target="#modalFokus4"><span
                            class="bg-white rounded-circle px-2 fs-5 text-primary">4</span>
                        <br> [Daya Inklusif dan kolaborasi SAKTI]
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalFokus1" tabindex="-1" aria-labelledby="modalFokus1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 text-primary" id="modalFokus1Label">1. [Daya berdaya SAKTI]</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Semakin meningkatnya jumlah anak jalanan yang berlokasi di
                        perempatan jalan pertigaanjalan dan terminal bus maupun angkot. Mereka
                        masih berusia anak anak dan belum saatnya bekerja. Munculnya anak
                        jalanan di sektor tersebut disebabkan tuntutan ekonomi keluarga yang
                        dalam kondisi miskin dan sulitnya mendapatkan pekerjaan karena belum
                        memiliki keterampilan sehingga mereka memilih bekerja di jalanan karena
                        sektor tersebut yang dapat menerima mereka.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-4" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalFokus3" tabindex="-1" aria-labelledby="modalFokus3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 text-primary" id="modalFokus3Label">3. [Daya Tumbuh SAKTI]</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Laju pertumbuhan ekonomi Kota Blitar 2017 2021 (data terbaru BPS)
                        4,28% di bawah pertumbuhan ekonomi nasional di tahun 2022 sebesar
                        5,31%.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-4" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalFokus4" tabindex="-1" aria-labelledby="modalFokus4Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 text-primary" id="modalFokus4Label">4. [Daya Inklusif dan kolaborasi
                        SAKTI]</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <p>
                        Daya layan fasilitas pendidikan tingkat SD sederajat di tiap kecamatan Kota Blitar yaitu Kecamatan
                        Sukorejo, Kepanjenkidul, dan Sananwetan memiliki tingkat pelayanan defisit. Hal ini disebabkan
                        karena jumlah fasilitas SD sederajat yang tersedia belum mampu mendukung kebutuhan penduduk, daya
                        layan fasilitas pendidikan tingkat SMP sederajat di Kota Blitar yang memiliki tingkat pelayanan
                        surplus hanya di Kecamatan Kepanjenkidul karena sudah mampu mendukung kebutuhan penduduk dan masih
                        kelebihan 1 unit SMP sederajat, sedangkan fasilitas pendidikan SMP sederajat di Kecamatan Sukorejo
                        dan Sananwetan memiliki tingkat pelayanan defisit karena masih belum mampu mendukung kebutuhan
                        penduduk. Untuk pendidikan tingkat SMA menjadi wilayah kewenangan Pemerintah Kota Blitar Provinsi
                        Jawa Timur. Kota Blitar masih kekurangan sejumlah fasilitas olahraga untuk latihan atlet.
                    </p>

                    <h6>MANIFESTO DAYA GERAK DAN LAYANAN</h6>

                    <ul>
                        <li class="mb-1">Mendorong pembentukan kebijakan yang mendukung pendirian pusat pelatihan
                            kejuruan untuk pemuda.</li>
                        <li class="mb-1">Menyusun program pelatihan yang sesuai dengan kebutuhan pasar tenaga kerja
                            lokal.</li>
                        <li class="mb-1">Memberikan insentif pajak atau bantuan kepada perusahaan yang berpartisipasi
                            dalam pelatihan pemuda.</li>
                        <li class="mb-1">Mendorong pertumbuhan Ekonomi lokal berbasis Ekonomi Kreatif.</li>
                        <li class="mb-1">Membuat kebijakan dan regulasi yang mendukung pengembangan ekonomi lokal.</li>
                        <li class="mb-1">Mengoptimalkan peran Pemerintah Kota Blitar dalam mendukung inisiatif dan
                            program pertumbuhan ekonomi.</li>
                        <li class="mb-1">Membangun kemitraan yang kuat dengan pihak swasta untuk mendorong investasi dan
                            inovasi.</li>
                        <li class="mb-1">Melibatkan perusahaan swasta dalam program pembangunan ekonomi lokal.</li>
                    </ul>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-4" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalFokus2" tabindex="-1" aria-labelledby="modalFokus2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 text-primary" id="modalFokus2Label">2. [Daya kembang SAKTI]</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Tingkat Pengangguran Terbuka (TPT) Kota Blitar di Tahun 2022</p>
                    <p>Sebesar 5,39%, selisih 0,44% lebih rendah dibandingkan dengan TPT rata-rata di Indonesia. Hal ini
                        menunjukkan Tingkat pengangguran terbuka di Kota Blitar masih cukup tinggi di atas 5%.</p>
                    <p>Berdasarkan data di atas, untuk mengatasi masalah ini, pemerintah Kota Blitar menargetkan angka
                        pengangguran menjadi 5,22% pada tahun 2023.</p>
                    <p>Beberapa langkah yang diambil bisa dengan mendorong diversifikasi ekonomi dan fokus pada
                        sektor-sektor yang memiliki potensi pertumbuhan meliputi:</p>
                    <ul>
                        <li style="list-style-type:none;" class="mb-1"> <b>A.Pariwisata:</b> Sektor ini menjanjikan
                            pendapatan
                            tetap dan juga
                            menciptakan pekerjaan sementara
                            berkelanjutan.</li>
                        <li style="list-style-type:none;" class="mb-1"> <b>B.Pertanian Modern:</b> Sektor ini dapat
                            meningkatkan
                            produktivitas
                            dan pendapatan peternakan,
                            sehingga memberikan dampak positif pada pengangguran.</li>
                        <li style="list-style-type:none;" class="mb-1"> <b>C.Industri Kreatif:</b> Sektor ini melibatkan
                            kegiatan seperti
                            desain, produksi, dan penjualan
                            produk kreatif, yang dapat membantu menciptakan pekerjaan dan pendapatan tambahan.</li>
                    </ul>
                    <p>Sedangkan dalam upaya mendorong tumbuhnya minat Masyarakat untuk menjalankan bisnis UMKM. Beberapa
                        langkah yang diambil bisa dengan mendorong program pembinaan dan pendampingan bagi usaha mikro,
                        kecil, dan menengah (UMKM) meliputi:</p>
                    <ul>
                        <li style="list-style-type:none;" class="mb-1"><b>A. Pengembangan Infrastruktur:</b>
                            Mengembangkan
                            infrastruktur yang
                            mendukung pertumbuhan usaha,
                            seperti jalur pengangkutan, fasilitas pendidikan, dan infrastruktur pemborongan.</li>
                        <li style="list-style-type:none;" class="mb-1"><b>B. Pelatihan dan Pengembangan Sumber Daya
                                Manusia:</b> Mendorong
                            pelatihan dan pengembangan sumber
                            daya manusia untuk UMKM, seperti kursus pengempreneuran, manajemen perusahaan, dan pengembangan
                            keterampilan kerja.</li>
                        <li style="list-style-type:none;" class="mb-1"><b>C. Pemborongan Usaha:</b> Mendorong
                            pemborongan usaha
                            baru dan
                            meningkatkan daya saing UMKM yang
                            ada, terutama dalam sektor pariwisata, pertanian modern, dan industri kreatif.</li>
                        <li style="list-style-type:none;" class="mb-1"><b>D. Pengadaan Dana:</b> Menyediakan dana
                            pendampingan
                            untuk UMKM,
                            seperti subsidi, soft loan, dan
                            fasilitas kredit.</li>
                        <li style="list-style-type:none;" class="mb-1"><b>E. Pengurangan Beban Biaya:</b> Mengurangi
                            beban
                            biaya yang dihadapi
                            UMKM, seperti pengurangan biaya
                            energi, transportasi, dan pengadaan.</li>
                        <li style="list-style-type:none;" class="mb-1"><b>F. Pemasaran Produk:</b> Membantu UMKM
                            meningkatkan
                            pemasaran produk
                            mereka, terutama kepada pasar
                            lokal, regional, dan internasional.</li>
                    </ul>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-4" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
