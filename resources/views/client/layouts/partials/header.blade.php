<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-xl-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular  fa-location-dot"></i>
                                <span>Ho Chi Minh City, Viet Nam</span>
                            </li>
                            <li class="d-none d-xl-inline-block"><i class="fa-regular fa-clock"></i>
                                <span> 8.00 am - 7.00 pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-right">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-md-inline-block"><a href="">FAQ</a></li>
                                <li class="d-none d-md-inline-block"><a href="">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.svg') }}"
                                    alt="Tourm"></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-xl-inline-block">
                            <ul>
                                <li>
                                    <a class="active" href="{{ route('home') }}">Trang chủ</a>
                                </li>
                                <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                                <li>
                                    <a href="{{ route('destination') }}">Điểm đến</a>
                                </li>
                                <li>
                                    <a href="#">Hoạt động giải trí</a>
                                </li>
                                <li>
                                    <a href="#">Dịch vụ lưu trú</a>
                                </li>
                                <li>
                                    <a href="contact.html">Liên Hệ</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            @if (Auth::guard('web')->check())
                                <a href="" class="th-btn style3 th-icon">
                                    <i class="far fa-user"></i>
                                    {{ Auth::guard('web')->user()->name }}
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="th-btn style3 th-icon">
                                    <i class="far fa-user"></i>
                                    Tài khoản
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg" data-mask-src="assets/img/logo_bg_mask.png"></div>
        </div>
    </div>
</header>
