<section class="position-relative bg-top-center overflow-hidden space" id="service-sec"
    data-bg-src="{{ asset('assets/img/bg/tour_bg_1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title">Best Place For You</span>
                    <h2 class="sec-title">Nơi lưu trú tốt nhất</h2>
                    <p class="sec-text">
                        Chúng tôi cung cấp các dịch vụ lưu trú, ẩm thực, vận chuyển và hướng dẫn viên chuyên nghiệp để
                        giúp bạn có một chuyến đi tuyệt vời nhất.
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-area tour-slider ">
            <div class="swiper th-slider has-shadow slider-drag-wrap"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($properties as $item)
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img">
                                    <img src="{{ asset('assets/img/tour/tour_box_1.jpg') }}" alt="image">
                                </div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.html">Greece Tour Package</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated
                                                <strong class="rating">5.00</strong> out of 5 based on <span
                                                    class="rating">4.8</span>(4.8
                                                Rating)</span>
                                        </div>
                                        <a href="tour-details.html" class="woocommerce-review-link">(<span
                                                class="count">4.8</span>
                                            Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                    <div class="tour-action">
                                        <span><i class="fa-light fa-clock"></i>7 Days</span>
                                        <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</section>
