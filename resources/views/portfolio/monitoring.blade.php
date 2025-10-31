@extends('layouts.app')

@section('title', 'DISKOMINFO Karanganyar - Monitoring Program & Kegiatan')

@section('content')
        <div class="container-fluid">
            <div class="row p-30-0">
                <div class="col-lg-12">
                    <div class="art-section-title">
                        <div class="art-title-frame">
                            <h4>Aplikasi Monitoring Program & Kegiatan DISKOMINFO Karanganyar</h4>
                        </div>
                        <div class="art-right-frame">
                            <div class="art-project-category">Web & Mobile Application</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="art-a art-project-cover">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/monitoring-cover.jpg') }}" class="art-portfolio-item-frame art-horizontal">
                            <img src="{{ asset('img/works/monitoring-cover.jpg') }}" alt="Dashboard Monitoring DISKOMINFO">
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="art-section-title">
                        <div class="art-title-frame">
                            <h4>Project details</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="art-a art-card art-fluid-card">
                        <h5 class="mb-15">Description</h5>
                        <div class="mb-15">
                            <p>Mengembangkan aplikasi berbasis web dan mobile untuk memantau program dan kegiatan DISKOMINFO Karanganyar secara real-time. Sistem ini dirancang untuk meningkatkan efisiensi dan transparansi dalam pelaksanaan program dan kegiatan dinas.</p>
                            
                            <h6 class="mt-20 mb-10">Fitur Utama:</h6>
                            <ul class="art-list">
                                <li>Monitoring real-time program dan kegiatan DISKOMINFO</li>
                                <li>Sistem akses 3-tier (Kepala Dinas, Kepala Bidang, Staff Pelaksana)</li>
                                <li>Dashboard responsif dengan visualisasi data yang informatif</li>
                                <li>Integrasi antara platform web dan mobile</li>
                                <li>Pelaporan dan tracking progress kegiatan</li>
                            </ul>
                            
                            <h6 class="mt-20 mb-10">Teknologi yang Digunakan:</h6>
                            <ul class="art-list">
                                <li>Frontend: HTML5, CSS3, JavaScript, Framework Responsif</li>
                                <li>Backend: PHP, Database MySQL</li>
                                <li>Mobile: Native/Hybrid Framework</li>
                                <li>Integrasi API untuk sinkronisasi data</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="art-a art-card">
                        <div class="art-table p-15-15">
                            <ul>
                                <li>
                                    <h6>Final Date:</h6><span>Jan 25</span>
                                </li>
                                <li>
                                    <h6>Status:</h6><span>Selesai</span>
                                </li>
                                <li>
                                    <h6>Client:</h6><span>DISKOMINFO Karanganyar</span>
                                </li>
                                <li>
                                    <h6>Location:</h6><span><a href="https://goo.gl/maps/example" target="_blank" data-no-swup>Karanganyar, Jawa Tengah</a></span>
                                </li>
                                <li>
                                    <h6>Platform:</h6><span>Web & Mobile</span>
                                </li>
                            </ul>
                        </div>
                        <a href="https://gitd3ti.vokasi.uns.ac.id/dimaswahyusulistyo/web-monitoring"  target="_blank" data-no-swup class="art-btn art-btn-md"> <span>Repository</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="art-section-title">
                        <div class="art-title-frame">
                            <h4>Implementation</h4>
                        </div>
                    </div>
                </div>

                <div class="art-grid art-grid-2-col art-gallery">
                    <div class="art-grid-item">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/monitoring-1.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <img src="{{ asset('img/works/monitoring-1.jpg') }}" alt="Dashboard Monitoring">
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                        </a>
                    </div>

                    <div class="art-grid-item">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/monitoring-4.jpg') }}" class="art-a art-portfolio-item-frame art-vertical">
                            <img src="{{ asset('img/works/monitoring-4.jpg') }}" alt="Manajemen User & Akses">
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                        </a>
                    </div>

                    <div class="art-grid-item">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/monitoring-4.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <img src="{{ asset('img/works/monitoring-4.jpg') }}" alt="Mobile Application">
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
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
                                        <img class="art-testimonial-face" src="{{ asset('img/testimonials/4.png') }}" alt="Fullstack Developer">
                                        <h5>Dimas Wahyu Sulistyo</h5>
                                        <div class="art-el-suptitle mb-15">Frontend Developer</div>
                                        <div class="mb-15">Sebagai Frontend Developer, bertanggung jawab dalam pengembangan antarmuka pengguna untuk aplikasi Monitoring. 
    Merancang tampilan yang responsif dan interaktif menggunakan Vue.js, memastikan pengalaman pengguna yang optimal, 
    serta berkolaborasi dengan tim backend untuk integrasi data yang efisien dan dinamis.</div>
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
                <div class="art-copy">© 2024 Nama Anda</div>
                <div>Template author:&nbsp; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank" data-no-swup>Nazar Miller</a></div>
            </footer>
        </div>

@endsection