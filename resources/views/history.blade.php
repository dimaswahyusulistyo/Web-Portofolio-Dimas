@extends('layouts.app') @section('title', 'History') @section('content')
<div class="container-fluid">
    <div class="row p-30-0">
        <div class="col-lg-6">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Pendidikan</h4>
                </div>
            </div>

            <div class="art-timeline art-gallery">
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>SMA Negeri 1 Surakarta</h5>
                                <div class="art-el-suptitle mb-15">Siswa</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Juli 2018 - Juli 2022</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img
                                    class="art-brand"
                                    src="{{ asset('img/brands/3.png') }}"
                                    alt="brand"
                                    height="50">
                            </div>
                        </div>

                        <p>Saya memiliki pengalaman dalam pelajaran informatika selama masa SMA. Selama
                            periode tersebut, saya memfokuskan diri pada pemahaman dasar pemrograman dengan
                            menggunakan bahasa Turbo Pascal. Saya memperoleh pengetahuan dalam membuat
                            perhitungan angka, mengembangkan program dengan algoritma yang tepat, dan
                            mengimplementasikan logika pemrograman melalui pemecahan masalah.</p>
                        <a
                            data-fancybox="diplome"
                            data-no-swup="data-no-swup"
                            href="{{ asset('files/certificate.jpg') }}"
                            class="art-link art-color-link art-w-chevron">Diploma</a>
                    </div>
                </div>

                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Universitas Sebelas Maret</h5>
                                <div class="art-el-suptitle mb-15">Mahasiswa</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Juli 2022 - Sekarang</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img
                                    class="art-brand"
                                    src="{{ asset('img/brands/2.png') }}"
                                    alt="brand"
                                    width="100">
                            </div>
                        </div>
                        <div>Saya adalah seorang mahasiswa yang bersemangat dalam eksplorasi dunia
                            pemrograman dan teknologi. Selama kuliah, saya telah mempelajari berbagai bahasa
                            pemrograman seperti HTML, PHP, dan Java, yang memberikan dasar kuat dalam
                            pengembangan web dan aplikasi. Selain itu, minat saya dalam Realitas Virtual
                            (VR) dan Augmented Reality (AR) telah memimpin saya untuk memahami cara
                            menciptakan pengalaman VR/AR yang menarik.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Pengalaman Kerja</h4>
                </div>
            </div>

            <div class="art-timeline">
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Dinas Komunikasi dan Informatika Kabupaten Karanganyar</h5>
                                <div class="art-el-suptitle mb-15">Full-stack Developer</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Jan 2025 - Jul 2025 · 7 bulan</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img
                                    class="art-brand"
                                    src="{{ asset('img/brands/logo-kominfo.png') }}"
                                    alt="Dinas Kominfo"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </div>

                        <p>Sebagai bagian dari Program Kuliah Magang Mahasiswa (KMM), saya berkontribusi
                            dalam pengembangan sistem berbasis web untuk memantau dan mengelola data
                            stunting di Kabupaten Karanganyar.</p>

                        <ul>
                            <li>Mengembangkan antarmuka responsif menggunakan Vue.js (dashboard, entri data,
                                modul pelaporan)</li>
                            <li>Mendesain arsitektur database (MySQL) dan RESTful APIs (PHP/Laravel) untuk
                                manajemen data stunting</li>
                            <li>Berkolaborasi dalam integrasi data lintas dinas (Kesehatan, PU, Sosial, dll.)</li>
                            <li>Mengkoordinasikan sistem kader kesehatan desa</li>
                            <li>Mengimplementasikan sinkronisasi data real-time antar instansi pemerintah</li>
                        </ul>
                    </div>
                </div>

                <!-- Dinas Kominfo Frontend -->
                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Dinas Komunikasi dan Informatika Kabupaten Karanganyar</h5>
                                <div class="art-el-suptitle mb-15">Frontend Developer</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Sep 2024 - Jan 2025 · 5 bulan</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img
                                    class="art-brand"
                                    src="{{ asset('img/brands/logo-kominfo.png') }}"
                                    alt="Dinas Kominfo"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </div>

                        <p>Berkontribusi dalam pengembangan aplikasi monitoring berbasis web untuk Dinas
                            Komunikasi dan Informatika Kabupaten Karanganyar.</p>

                        <ul>
                            <li>Mengembangkan dashboard interaktif untuk memantau program dan kegiatan
                                pemerintah secara real-time</li>
                            <li>Berkolaborasi dengan tim backend dalam integrasi API untuk presentasi data
                                yang dinamis</li>
                            <li>Membangun modul pelaporan program dan kegiatan yang mudah diakses dan
                                terstruktur</li>
                            <li>Mengimplementasikan desain responsif untuk tampilan optimal di berbagai
                                perangkat</li>
                            <li>Meningkatkan pengalaman pengguna melalui desain antarmuka yang intuitif</li>
                        </ul>
                    </div>
                </div>

                <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>

                    <div class="art-a art-timeline-content">
                        <div class="art-card-header">
                            <div class="art-left-side">
                                <h5>Aplikasi Persuratan Kecamatan Banjarsari - RASUDI</h5>
                                <div class="art-el-suptitle mb-15">Frontend Developer</div>
                            </div>
                            <div class="art-right-side">
                                <span class="art-date">Januari 2024 - Juli 2024 · 6 bulan</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img
                                    class="art-brand"
                                    src="{{ asset('img/brands/logo-surakarta.png') }}"
                                    alt="brand"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </div>

                        <p>Sebagai bagian dari Program Pembelajaran Berbasis Proyek (PBL), terlibat
                            dalam pengembangan aplikasi persuratan untuk Kecamatan Banjarsari.</p>

                        <ul>
                            <li>Mengembangkan antarmuka pengguna yang responsif dan menarik menggunakan
                                framework Vue.js</li>
                            <li>Menyelaraskan antarmuka pengguna dengan desain dan spesifikasi produk</li>
                            <li>Berkolaborasi dengan tim pengembangan backend untuk mengintegrasikan logika
                                bisnis dengan antarmuka pengguna</li>
                            <li>Mengimplementasikan fitur surat menyurat, undangan, dan disposisi digital</li>
                            <li>Melakukan testing dan debugging untuk memastikan kualitas aplikasi</li>
                        </ul>
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