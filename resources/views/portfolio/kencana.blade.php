@extends('layouts.app') @section('title', 'Aplikasi Stunting - DISKOMINFO
Karanganyar') @section('content')
<div class="container-fluid">
    <div class="row p-30-0">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Aplikasi Monitoring dan Intervensi Data Anak Stunting DISKOMINFO Karanganyar</h4>
                </div>
                <div class="art-right-frame">
                    <div class="art-project-category">Fullstack Web Application</div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="art-a art-project-cover">
                <a
                    data-fancybox="gallery"
                    data-no-swup="data-no-swup"
                    href="{{ asset('img/works/stunting-1.png') }}"
                    class="art-portfolio-item-frame art-horizontal">
                    <img
                        src="{{ asset('img/works/stunting-1.png') }}"
                        alt="Dashboard Aplikasi Stunting">
                    <span class="art-item-hover">
                        <i class="fas fa-expand"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Detail Proyek</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="art-a art-card art-fluid-card">
                <h5 class="mb-15">Deskripsi</h5>
                <div class="mb-15">
                    <p>Mengembangkan aplikasi web untuk mengelola, memantau, dan mengintervensi data
                        anak stunting dalam rangka percepatan penurunan stunting di Kabupaten
                        Karanganyar. Aplikasi ini digunakan oleh 177 kader dari seluruh desa di
                        Kabupaten Karanganyar untuk pendataan dan monitoring kasus stunting secara
                        efektif.</p>

                    <h6 class="mt-20 mb-10">Pencapaian Utama:</h6>
                    <ul class="art-list">
                        <li>Analisis kebutuhan pengguna dan perancangan alur aplikasi sesuai proses
                            pendataan dan intervensi stunting</li>
                        <li>Pengembangan sistem fullstack berbasis Laravel dan Vue.js untuk pengelolaan
                            data stunting</li>
                        <li>Implementasi antarmuka pengguna yang responsif untuk penyajian data publik
                            yang efektif</li>
                        <li>Pelatihan dan pendampingan 177 kader dalam penggunaan aplikasi</li>
                        <li>Integrasi sistem monitoring real-time untuk percepatan penurunan angka stunting</li>
                    </ul>

                    <h6 class="mt-20 mb-10">Teknologi yang Digunakan:</h6>
                    <ul class="art-list">
                        <li>
                            <strong>Frontend:</strong>
                            Vue.js, JavaScript, HTML5, CSS3, Bootstrap</li>
                        <li>
                            <strong>Backend:</strong>
                            Laravel, PHP, MySQL</li>
                        <li>
                            <strong>Infrastruktur:</strong>
                            RESTful API, Git, Web Server</li>
                        <li>
                            <strong>Fitur:</strong>
                            Dashboard interaktif, Laporan real-time, Manajemen pengguna</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Periode:</h6>
                            <span>Jan 2025 – Juli 2025</span>
                        </li>
                        <li>
                            <h6>Status:</h6>
                            <span>Selesai</span>
                        </li>
                        <li>
                            <h6>Klien:</h6>
                            <span>DISKOMINFO Karanganyar</span>
                        </li>
                        <li>
                            <h6>Lokasi:</h6>
                            <span>
                                <a
                                    href="https://goo.gl/maps/karanganyar"
                                    target="_blank"
                                    data-no-swup="data-no-swup">Kabupaten Karanganyar, Jawa Tengah</a>
                            </span>
                        </li>
                        <li>
                            <h6>Pengguna:</h6>
                            <span>177 Kader Desa dan TPPS</span>
                        </li>
                    </ul>
                </div>
                <a
                    href="https://gitd3ti.vokasi.uns.ac.id/aplikasi-stunting"
                    target="_blank"
                    data-no-swup="data-no-swup"
                    class="art-btn art-btn-md">
                    <span>Repository</span></a>
                <a
                    href="http://kencana.karanganyarkab.go.id"
                    target="_blank"
                    data-no-swup="data-no-swup"
                    class="art-btn art-btn-md">
                    <span>Deploy</span></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-80" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Implementasi Sistem</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <a
                data-fancybox="gallery"
                data-no-swup
                href="{{ asset('img/works/stunting-3.png') }}"
                class="art-a art-portfolio-item-frame art-horizontal">
                <img 
                    src="{{ asset('img/works/stunting-3.png') }}" 
                    alt="Dashboard Monitoring"
                    class="img-fluid">
                <span class="art-item-hover">
                    <i class="fas fa-expand"></i>
                </span>
            </a>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
            <a
                data-fancybox="gallery"
                data-no-swup
                href="{{ asset('img/works/stunting-2.png') }}"
                class="art-a art-portfolio-item-frame art-horizontal">
                <img
                    src="{{ asset('img/works/stunting-2.png') }}"
                    alt="Manajemen User & Akses"
                    class="img-fluid">
                <span class="art-item-hover">
                    <i class="fas fa-expand"></i>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid mt-50">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Fitur Utama Aplikasi</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-card art-feature-card">
                <div class="art-card-body">
                    <div class="art-service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5>Monitoring Real-time</h5>
                    <p>Pemantauan data stunting secara real-time dengan dashboard interaktif dan
                        visualisasi data yang komprehensif</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-card art-feature-card">
                <div class="art-card-body">
                    <div class="art-service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5>Manajemen Kader</h5>
                    <p>Sistem pengelolaan 177 kader dari seluruh desa dengan hak akses dan wewenang
                        yang terintegrasi</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-card art-feature-card">
                <div class="art-card-body">
                    <div class="art-service-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <h5>Intervensi Stunting</h5>
                    <p>Modul untuk merencanakan, melaksanakan, dan memantau program intervensi
                        stunting di setiap wilayah</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-card art-feature-card">
                <div class="art-card-body">
                    <div class="art-service-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h5>Pemetaan Wilayah</h5>
                    <p>Visualisasi geografis persebaran kasus stunting untuk identifikasi area
                        prioritas intervensi</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-card art-feature-card">
                <div class="art-card-body">
                    <div class="art-service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h5>Analitik Data</h5>
                    <p>Analisis mendalam data stunting dengan berbagai parameter untuk mendukung
                        pengambilan keputusan</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-card art-feature-card">
                <div class="art-card-body">
                    <div class="art-service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h5>Responsive Design</h5>
                    <p>Antarmuka yang optimal di semua perangkat, memudahkan kader bekerja di
                        lapangan menggunakan smartphone</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Tim Pengembangan</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img
                                    class="art-testimonial-face"
                                    src="{{ asset('img/testimonials/4.jpg') }}"
                                    alt="Fullstack Developer">
                                <h5>Dimas Wahyu Sulistyo</h5>
                                <div class="art-el-suptitle mb-15">Fullstack Developer Modul Anak Stunting</div>
                                <div class="mb-15">Sebagai Fullstack Developer, bertanggung jawab dalam
                                    pengembangan end-to-end aplikasi stunting. Menganalisis kebutuhan pengguna dan
                                    mengimplementasikan frontend dengan Vue.js dan backend dengan Laravel.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="art-slider-navigation">
                <div class="art-sn-left">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="art-sn-right">
                    <div class="art-slider-nav-frame">
                        <div class="art-slider-nav art-testi-swiper-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="art-slider-nav art-testi-swiper-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Dampak dan Hasil</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="art-a art-card art-counter-card">
                <div class="art-card-body">
                    <div class="art-counter-number">177</div>
                    <div class="art-counter-title">Kader Terlibat</div>
                    <p>Kader dari seluruh desa di Kabupaten Karanganyar</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="art-a art-card art-counter-card">
                <div class="art-card-body">
                    <div class="art-counter-number">100%</div>
                    <div class="art-counter-title">Coverage Wilayah</div>
                    <p>Seluruh desa tercakup dalam sistem monitoring</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="art-a art-card art-counter-card">
                <div class="art-card-body">
                    <div class="art-counter-number">24/7</div>
                    <div class="art-counter-title">Akses Data</div>
                    <p>Monitoring real-time kapan saja dan di mana saja</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="art-a art-card art-counter-card">
                <div class="art-card-body">
                    <div class="art-counter-number">∞</div>
                    <div class="art-counter-title">Skalabilitas</div>
                    <p>Sistem dapat dikembangkan untuk kebutuhan masa depan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <footer>
        <div class="art-copy">© 2025</div>
        <div>
            <a data-no-swup="data-no-swup">Dimas Wahyu S</a >
        </div>
    </footer>
</div>
@endsection