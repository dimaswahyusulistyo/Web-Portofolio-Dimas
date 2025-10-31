<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('layout.Head')
</head>
<body>
    <!-- app -->
    <div class="art-app">
        <!-- mobile top bar -->
        <div class="art-mobile-top-bar"></div>

        <!-- app wrapper -->
        <div class="art-app-wrapper">
            <!-- app container -->
            <div class="art-app-container">
                <!-- sidebar/info bar -->
                @include('layout.SideBar')

                <!-- content -->
                <div class="art-content">
                    <!-- curtain -->
                    <div class="art-curtain"></div>

                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url({{ asset('img/bg.jpg') }})">
                        <!-- overlay -->
                        <div class="art-top-bg-overlay"></div>
                    </div>

                    <!-- swup container -->
                    <div class="transition-fade" id="swup">
                        <!-- scroll frame -->
                        <div id="scrollbar" class="art-scroll-frame">
                            <!-- YIELD CONTENT DI SINI -->
                            @yield('content')
                        </div>
                    </div>
                </div>

                <!-- menu bar -->
                @include('layout.MenuBar')
            </div>
        </div>

        <!-- preloader -->
        <div class="art-preloader">
            <div class="art-preloader-content">
                <h4>Dimas Wahyu Sulistyo</h4>
                <div id="preloader" class="art-preloader-load"></div>
            </div>
        </div>
    </div>

    @include('layout.Script')
</body>
</html>