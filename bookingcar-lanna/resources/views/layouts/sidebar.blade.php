<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-right"><span>Back</span></div>
                    </li>
                    <li>
                        <a class="nav-link menu-title {{ request()->route()->getPrefix() == '/dashboard'? 'active': '' }}"
                            href="{{ url('/') }}"><i data-feather="home"></i><span>หน้าหลัก</span>

                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ request()->route()->getPrefix() == '/widgets'? 'active': '' }}"
                            href="#"><i data-feather="book"></i><span>การจอง</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-double-{{ request()->route()->getPrefix() == '/widgets'? 'down': 'right' }}"></i>
                            </div>
                        </a>
                        <ul class="nav-submenu menu-content"
                            style="display: {{ request()->route()->getPrefix() == '/widgets'? 'block;': 'none' }}">
                            <li><a href="{{ route('user-booking-status') }}"
                                    class="{{ Route::currentRouteName() == 'general-widget' ? 'active' : '' }}">สถานะการจอง</a>
                            </li>
                            <li><a href=""
                                    class="{{ Route::currentRouteName() == 'chart-widget' ? 'active' : '' }}">ประวัติการจอง</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
