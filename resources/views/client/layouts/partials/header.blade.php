<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-xl-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular  fa-location-dot"></i>
                                <span>Ha Noi, Viet Nam</span>
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
                                <li class="menu-item-has-children mega-menu-wrap">
                                    <a class="active" href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Destination</a>
                                    <ul class="sub-menu">
                                        <li><a href="destination.html">Destination</a></li>
                                        <li><a href="destination-details.html">Destination Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Activities</a>
                                    <ul class="sub-menu">
                                        <li><a href="activities.html">activities</a></li>
                                        <li><a href="activities-details.html">activities Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="tour.html">Our Tour</a></li>
                                        <li><a href="tour-details.html">Tour Details</a></li>
                                        <li><a href="resort.html">Resort page</a></li>
                                        <li><a href="resort-details.html">Resort Details</a></li>
                                        <li><a href="tour-details.html">Tour Details</a></li>
                                        <li><a href="tour-guide.html">Tour Guider</a></li>
                                        <li><a href="tour-guider-details.html">Tour Guider Details</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="price.html">Price Package</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="contact.html" class="th-btn style3 th-icon">Book Now</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg" data-mask-src="assets/img/logo_bg_mask.png"></div>
        </div>
    </div>
</header>
