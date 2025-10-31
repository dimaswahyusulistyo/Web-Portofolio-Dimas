@extends('layouts.app')

@section('title', 'TLOS - Game Unity')

@section('content')
        <div class="container-fluid">
            <div class="row p-30-0">
                <div class="col-lg-12">
                    <div class="art-section-title">
                        <div class="art-title-frame">
                            <h4>The Legend of Soldier - Game Unity</h4>
                        </div>
                        <div class="art-right-frame">
                            <div class="art-project-category">Game Development</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="art-a art-project-cover">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/game-1.jpg') }}" class="art-portfolio-item-frame art-horizontal">
                            <img src="{{ asset('img/works/4.jpg') }}" alt="The Legend of Soldier">
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
                        <div class="mb-15">The Legend of Soldier adalah permainan aksi petualangan yang dikembangkan menggunakan Unity Engine. Pemain mengambil peran sebagai seorang prajurit yang harus menjelajahi dunia fantasi, mengumpulkan pedang legendaris, dan mengalahkan musuh dalam waktu yang telah ditentukan. Game ini menampilkan mekanik gameplay yang menarik, grafis 3D yang imersif, dan sistem pencarian item yang menantang.</div>
                        <div class="art-buttons-frame">
                            <a href="#" class="art-link art-color-link art-w-chevron" target="_blank" data-no-swup>Play Demo</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="art-a art-card">
                        <div class="art-table p-15-15">
                            <ul>
                                <li>
                                    <h6>Release Date:</h6><span>15.06.2024</span>
                                </li>
                                <li>
                                    <h6>Status:</h6><span>Completed</span>
                                </li>
                                <li>
                                    <h6>Platform:</h6><span>Windows, WebGL</span>
                                </li>
                                <li>
                                    <h6>Engine:</h6><span>Unity 2022.3</span>
                                </li>
                            </ul>
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
                            <h4>Game Features</h4>
                        </div>
                    </div>
                </div>

                <div class="art-grid art-grid-2-col art-gallery">
                    <div class="art-grid-item webTemplates">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/7.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <img src="{{ asset('img/works/5.jpg') }}" alt="Gameplay Screenshot 1">
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                        </a>
                    </div>

                    <div class="art-grid-item logos">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/8.jpg') }}" class="art-a art-portfolio-item-frame art-vertical">
                            <img src="{{ asset('img/works/6.jpg') }}" alt="Gameplay Screenshot 2">
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                        </a>
                    </div>

                    <div class="art-grid-item drawings">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/works/9.jpg') }}" class="art-a art-portfolio-item-frame art-horizontal">
                            <img src="{{ asset('img/works/10.jpg') }}" alt="Gameplay Screenshot 3">
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
                            <h4>Technical Details</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="art-a art-card">
                        <h5 class="mb-15">Technologies Used</h5>
                        <ul class="art-knowledge-list p-15-0">
                            <li>Unity Engine 2022.3</li>
                            <li>C# Programming</li>
                            <li>3D Modeling & Animation</li>
                            <li>Particle Systems</li>
                            <li>UI/UX Design</li>
                            <li>Audio Integration</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="art-a art-card">
                        <h5 class="mb-15">Game Mechanics</h5>
                        <ul class="art-knowledge-list p-15-0">
                            <li>Third-person Controller</li>
                            <li>Item Collection System</li>
                            <li>Time-based Challenges</li>
                            <li>Enemy AI Behavior</li>
                            <li>Progressive Difficulty</li>
                            <li>Save/Load System</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="art-section-title">
                        <div class="art-title-frame">
                            <h4>Development Team</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="art-a art-testimonial">
                                    <div class="testimonial-body">
                                        <img class="art-testimonial-face" src="{{ asset('img/testimonials/4.png') }}" alt="Dimas Wahyu">
                                        <h5>Dimas Wahyu Sulistyo</h5>
                                        <div class="art-el-suptitle mb-15">Game Developer</div>
                                        <div class="mb-15">Sebagai Game Developer, saya bertanggung jawab dalam pengembangan mekanik gameplay, implementasi sistem pencarian item, dan integrasi seluruh komponen game. Saya memastikan pengalaman bermain yang smooth dan engaging bagi pemain.</div>
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
                <div class="art-copy">© 2024 Dimas Wahyu</div>
                <div>Template author:&nbsp; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank" data-no-swup>Nazar Miller</a></div>
            </footer>
        </div>
@endsection