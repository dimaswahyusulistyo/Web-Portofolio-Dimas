@extends('layouts.app') @section('title', 'RASUDI - Aplikasi Persuratan')
@section('content')
<div class="container-fluid">
    <div class="row p-30-0">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Aplikasi Persuratan, Undangan, dan Disposisi Kecamatan Banjarsari - RASUDI</h4>
                </div>
                <div class="art-right-frame">
                    <div class="art-project-category">Web Application</div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="art-a art-project-cover">
                <a
                    data-fancybox="gallery"
                    data-no-swup="data-no-swup"
                    href="{{ asset('img/works/3.png') }}"
                    class="art-portfolio-item-frame art-horizontal">
                    <img src="{{ asset('img/works/3.png') }}" alt="item">
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
                <div class="mb-15">Dalam lingkup pengelolaan administrasi di Kecamatan
                    Banjarsari, kompleksitas aplikasi yang telah disediakan menjadi permasalahan
                    utama yang perlu diatasi. Aplikasi yang ada saat ini memiliki beragam fitur yang
                    tersebar dan tidak terfokus pada satu tujuan yang jelas. Hal ini menyebabkan
                    kebingungan bagi sebagian pengguna dalam memahami dan menggunakan aplikasi
                    dengan efektif.</div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Priode:</h6>
                            <span>Feb 2024 - Agu 2024</span>
                        </li>
                        <li>
                            <h6>Status:</h6>
                            <span>Selesai</span>
                        </li>
                        <li>
                            <h6>Klien:</h6>
                            <span>Kecamatan Banjarsari</span>
                        </li>
                        <li>
                            <h6>Lokasi:</h6>
                            <span>
                                <a
                                    href="https://goo.gl/maps/b4w13Zuk9iWCsLMX7"
                                    target="_blank"
                                    data-no-swup="data-no-swup">Banjarsari, Surakarta</a>
                            </span>
                        </li>
                        <li>
                            <h6>Pengguna:</h6>
                            <span>Petugas Kelurahan</span>
                        </li>
                    </ul>
                </div>
                <a
                    href="https://gitd3ti.vokasi.uns.ac.id/aplikasi-persuratan"
                    target="_blank"
                    data-no-swup="data-no-swup"
                    class="art-btn art-btn-md">
                    <span>Repository</span></a>
                <a
                    href="https://rasudi.sricantik.id/#/"
                    target="_blank"
                    data-no-swup="data-no-swup"
                    class="art-btn art-btn-md">
                    <span>Deploy</span></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Implementasi Sistem</h4>
                </div>
            </div>
        </div>

        <div class="art-grid art-grid-2-col art-gallery">
            <div class="art-grid-item webTemplates">
                <a
                    data-fancybox="gallery"
                    data-no-swup="data-no-swup"
                    href="{{ asset('img/works/3.png') }}"
                    class="art-a art-portfolio-item-frame art-horizontal">
                    <img src="{{ asset('img/works/3.png') }}" alt="item">
                    <span class="art-item-hover">
                        <i class="fas fa-expand"></i>
                    </span>
                </a>
            </div>

            <div class="art-grid-item logos">
                <a
                    data-fancybox="gallery"
                    data-no-swup="data-no-swup"
                    href="{{ asset('img/works/2.png') }}"
                    class="art-a art-portfolio-item-frame art-vertical">
                    <img src="{{ asset('img/works/2.png') }}" alt="item">
                    <span class="art-item-hover">
                        <i class="fas fa-expand"></i>
                    </span>
                </a>
            </div>

            <div class="art-grid-item drawings">
                <a
                    data-fancybox="gallery"
                    data-no-swup="data-no-swup"
                    href="{{ asset('img/works/1.png') }}"
                    class="art-a art-portfolio-item-frame art-horizontal">
                    <img src="{{ asset('img/works/1.png') }}" alt="item">
                    <span class="art-item-hover">
                        <i class="fas fa-expand"></i>
                    </span>
                </a>
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
                                    alt="face">
                                <h5>Dimas Wahyu Sulistyo</h5>
                                <div class="art-el-suptitle mb-15">Front-end</div>
                                <div class="mb-15">Sebagai seorang Front End Developer, saya bertanggung jawab
                                    untuk menciptakan antarmuka pengguna yang menarik dan responsif. Dengan
                                    memanfaatkan HTML, CSS, dan JavaScript, saya memastikan setiap halaman web
                                    berfungsi dengan baik di berbagai perangkat dan menawarkan pengalaman pengguna
                                    yang intuitif dan lancar.</div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img
                                    class="art-testimonial-face"
                                    src="{{ asset('img/testimonials/5.jpg') }}"
                                    alt="face">
                                <h5>Diberkha Sajna Puwa</h5>
                                <div class="art-el-suptitle mb-15">Front-end</div>
                                <div class="mb-15">Sebagai seorang Front End Developer, saya menciptakan halaman
                                    web yang menarik dan interaktif. Dengan memanfaatkan HTML, CSS, dan JavaScript,
                                    saya merancang antarmuka yang responsif dan ramah pengguna, memastikan setiap
                                    elemen tampilan bekerja dengan sempurna di berbagai perangkat dan browser.</div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img
                                    class="art-testimonial-face"
                                    src="{{ asset('img/testimonials/7.jpg') }}"
                                    alt="face">
                                <h5>Ammar Al Amin</h5>
                                <div class="art-el-suptitle mb-15">Back-end</div>
                                <div class="mb-15">Sebagai seorang Back End Developer, saya bertanggung jawab
                                    atas pengembangan dan pemeliharaan sistem di sisi server. Saya menangani logika
                                    bisnis, basis data, dan integrasi API untuk memastikan aplikasi berjalan lancar
                                    dan data diproses dengan aman. Fokus saya adalah menciptakan arsitektur yang
                                    scalable dan efisien.</div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img
                                    class="art-testimonial-face"
                                    src="{{ asset('img/testimonials/6.jpg') }}"
                                    alt="face">
                                <h5>Bagus Oki Wijaya N</h5>
                                <div class="art-el-suptitle mb-15">Back-end</div>
                                <div class="mb-15">Sebagai seorang Back End Developer, saya fokus pada logika
                                    server, basis data, dan aplikasi backend. Saya mengembangkan dan memelihara
                                    arsitektur server yang kuat, memastikan data diproses dengan aman dan efisien,
                                    serta mengintegrasikan berbagai layanan untuk memastikan kelancaran operasional
                                    situs web atau aplikasi.</div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img
                                    class="art-testimonial-face"
                                    src="{{ asset('img/testimonials/8.png') }}"
                                    alt="face">
                                <h5>Meutya Riise</h5>
                                <div class="art-el-suptitle mb-15">UI/UX</div>
                                <div class="mb-15">Sebagai seorang UI/UX Designer, saya mengembangkan desain
                                    yang tidak hanya estetis tetapi juga intuitif. Melalui penelitian pengguna,
                                    wireframing, dan pengujian prototipe, saya memastikan setiap interaksi pengguna
                                    dengan produk kami menyenangkan dan efektif, meningkatkan kepuasan dan retensi
                                    pengguna.</div>
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
    <footer>
        <div class="art-copy">© 2025</div>
        <div>
            <a data-no-swup="data-no-swup">Dimas Wahyu S</a >
        </div>
    </footer>
</div>
@endsection