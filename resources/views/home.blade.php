@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="row p-60-0 p-lg-30-0 p-md-15-0">
        <div class="col-lg-12">
            <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
                <div class="art-banner-back"></div>
                <div class="art-banner-dec"></div>
                <div class="art-banner-overlay">
                    <div class="art-banner-title">
                        <h1 class="mb-15">
                            Welcome to My Portfolio!
                            <br/>
                            Explore Creativity.
                        </h1>
                        <div class="art-lg-text art-code mb-25">
                            &lt;<i>code</i>&gt; I build
                            <span
                                class="txt-rotate"
                                data-period="2000"
                                data-rotate='[ "web interfaces.", "web applications.", "design mocups." ]'></span >&lt;/<i>code</i>&gt;
                        </div>
                    </div>
                    <img src="img/face-2.png" class="art-banner-photo" alt="Dimas Wahyu"/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row p-30-0">
        <div class="col-md-3 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">1</span ><span class="art-counter-plus">+</span>
                </div>
                <h6>Years Experience</h6>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">3</span>
                </div>
                <h6>Completed Projects</h6>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">3</span>
                </div>
                <h6>Happy Customers</h6>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">0</span >
                    <span class="art-counter-plus"></span>
                </div>
                <h6>Honors and Awards</h6>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>My Services</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-service-icon-box">
                <div class="art-service-ib-content">
                    <h5 class="mb-15">Web Development</h5>
                    <div class="mb-15">
                        Membuat situs web yang fungsional, efisien, dan estetis, saya memastikan setiap
                        situs yang saya bangun bukan hanya sebuah kehadiran digital tetapi juga
                        pengalaman yang menarik.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-service-icon-box">
                <div class="art-service-ib-content">
                    <h5 class="mb-15">UI/UX Design</h5>
                    <div class="mb-15">
                        Memadukan kreativitas dengan fungsionalitas, memastikan setiap antarmuka tidak
                        hanya indah tetapi juga berpusat pada pengguna. Dengan memahami kebutuhan pengguna.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="art-a art-service-icon-box">
                <div class="art-service-ib-content">
                    <h5 class="mb-15">Game Design</h5>
                    <div class="mb-15">
                        Saya menciptakan dunia yang imersif dan gameplay yang menarik yang memikat
                        pemain. Dari konsep hingga eksekusi, saya merancang setiap elemen dengan
                        presisi.
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
                    <h4>Featured Projects</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img class="art-testimonial-face" src="img/testimonials/1.png" alt="RASUDI"/>
                                <h5>RASUDI</h5>
                                <div class="art-el-suptitle mb-15">
                                    Kecamatan Banjarsari
                                </div>
                                <div class="mb-15">
                                    Sistem manajemen persuratan, undangan, dan disposisi yang efektif dan transparan 
                                    untuk Kecamatan Banjarsari. Mengoptimalkan workflow administrasi dengan digitalisasi 
                                    proses surat menyurat.
                                </div>
                            </div>
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <div class="art-buttons-frame">
                                            <a href="{{ route('rasudi') }}" class="art-link art-color-link art-w-chevron">View Project</a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="art-right-side"></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img class="art-testimonial-face" src="img/testimonials/13.png" alt="Monitoring DISKOMINFO"/>
                                <h5>Monitoring DISKOMINFO</h5>
                                <div class="art-el-suptitle mb-15">
                                    DISKOMINFO Karanganyar
                                </div>
                                <div class="mb-15">
                                    Aplikasi monitoring real-time program dan kegiatan DISKOMINFO Karanganyar 
                                    dengan sistem 3-tier user access. Memungkinkan tracking progress kegiatan 
                                    secara efisien melalui platform web dan mobile.
                                </div>
                            </div>
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <div class="art-buttons-frame">
                                            <a href="{{ route('monitoring') }}" class="art-link art-color-link art-w-chevron">View Project</a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="art-right-side"></div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="art-a art-testimonial">
                            <div class="testimonial-body">
                                <img class="art-testimonial-face" src="img/testimonials/14.png" alt="Aplikasi Stunting"/>
                                <h5>Aplikasi Stunting</h5>
                                <div class="art-el-suptitle mb-15">
                                    DISKOMINFO Karanganyar
                                </div>
                                <div class="mb-15">
                                    Sistem monitoring dan intervensi data anak stunting untuk percepatan 
                                    penurunan stunting di Kabupaten Karanganyar. Digunakan oleh 177 kader 
                                    dari seluruh desa dengan dashboard real-time dan analitik data.
                                </div>
                            </div>
                            <div class="art-testimonial-footer">
                                <div class="art-left-side">
                                    <ul class="art-star-rate">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <div class="art-buttons-frame">
                                            <a href="{{ route('kencana') }}" class="art-link art-color-link art-w-chevron">View Project</a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="art-right-side"></div>
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