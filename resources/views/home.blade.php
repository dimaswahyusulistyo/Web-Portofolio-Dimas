@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                <!-- col -->
                <div class="col-lg-12">
                    <!-- banner -->
                    <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.jpg') }})">
                        <div class="art-banner-back"></div>
                        <div class="art-banner-dec"></div>
                        <div class="art-banner-overlay">
                            <div class="art-banner-title">
                                <h1 class="mb-15">
                                    Welcome to My Portfolio!<br/>
                                    Explore Creativity.
                                </h1>
                                <div class="art-lg-text art-code mb-25">
                                    &lt;<i>code</i>&gt; I build
                                    <span class="txt-rotate" data-period="2000" 
                                           data-rotate='[ "web interfaces.", "web applications.", "design mocups." ]'></span>
                                    &lt;/<i>code</i>&gt;
                                </div>
                            </div>
                            <img src="{{ asset('img/face-2.png') }}" class="art-banner-photo" alt="Dimas Wahyu"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- counters row -->
            <div class="row p-30-0">
                <div class="col-md-3 col-6">
                    <div class="art-counter-frame">
                        <div class="art-counter-box">
                            <span class="art-counter">1</span><span class="art-counter-plus">+</span>
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
                            <span class="art-counter">5</span>
                        </div>
                        <h6>Happy Customers</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="art-counter-frame">
                        <div class="art-counter-box">
                            <span class="art-counter">0</span>
                            <span class="art-counter-plus"></span>
                        </div>
                        <h6>Honors and Awards</h6>
                    </div>
                </div>
            </div>

            <!-- services section -->
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
                                Membuat situs web yang fungsional, efisien, dan estetis...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="art-a art-service-icon-box">
                        <div class="art-service-ib-content">
                            <h5 class="mb-15">UI/UX Design</h5>
                            <div class="mb-15">
                                Memadukan kreativitas dengan fungsionalitas...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="art-a art-service-icon-box">
                        <div class="art-service-ib-content">
                            <h5 class="mb-15">Game Design</h5>
                            <div class="mb-15">
                                Saya menciptakan dunia yang imersif dan gameplay yang menarik...
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <footer>
                <div class="art-copy">© 2024 Dimas Wahyu</div>
                <div>
                    Template author:&#160;
                    <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank" data-no-swup>
                        Nazar Miller
                    </a>
                </div>
            </footer>
        </div>
    </div>
@endsection