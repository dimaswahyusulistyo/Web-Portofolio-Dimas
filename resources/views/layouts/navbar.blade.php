<div class="art-menu-bar">
    <div class="art-menu-bar-frame">
        <div class="art-menu-bar-header">
            <div class="art-menu-bar-btn">
                <span></span>
            </div>
        </div>

        <div class="art-current-page"></div>

        <div class="art-scroll-frame">
            <nav id="swupMenu">
                <ul class="main-menu">
                    <li
                        class="menu-item {{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li
                        class="menu-item menu-item-has-children {{ request()->routeIs() ? 'current-menu-item' : '' }}">
                        <a href="#" data-no-swup="data-no-swup">Portfolio</a>
                        <ul class="sub-menu">
                            <li
                                class="menu-item {{ request()->routeIs('rasudi') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('rasudi') }}">Apikasi Rasudi</a>
                            </li>

                            <li
                                class="menu-item {{ request()->routeIs('monitoring') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('monitoring') }}">Apikasi Monitoring</a>
                            </li>

                            <li
                                class="menu-item {{ request()->routeIs('kencana') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('kencana') }}">Aplikasi Kencana</a>
                            </li>

                            <li
                                class="menu-item {{ request()->routeIs('gameunity') ? 'current-menu-item' : '' }}">
                                <a href="{{ route('gameunity') }}">TLOS - Game Unity</a>
                            </li>

                        </ul>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs('history') ? 'current-menu-item' : '' }}">
                        <a href="{{ route('history') }}">History</a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>