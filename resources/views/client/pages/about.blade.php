@extends('client.layouts.master')
@section('title', 'Giới thiệu')
@section('content')
    <div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="assets/img/normal/about_3_1.jpg" alt="About">
                        </div>
                        <div class="img2">
                            <img src="assets/img/normal/about_3_2.jpg" alt="About">
                        </div>
                        <div class="img3 movingX">
                            <img src="assets/img/normal/about_3_3.jpg" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="ps-xl-4">
                        <div class="title-area mb-20">
                            <span class="sub-title style1 ">Welcome To Tourm</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">
                                Chúng tôi là một trong những công ty du lịch hàng đầu thế giới
                            </h2>
                        </div>
                        <p class="pe-xl-5">

                        </p>
                        <p class="mb-30 pe-xl-5"> Du lịch mở ra một thế giới của những trải nghiệm và cuộc phiêu lưu mới. Nó
                            cho phép bạn khám phá các nền văn hóa khác nhau, nếm thử các món ăn kỳ lạ và gặp gỡ những người
                            mới. Cho dù bạn đang đi bộ đường dài qua những khu rừng tươi tốt, thư giãn trên những bãi biển
                            nguyên sơ hay lang thang trên những con phố đông đúc của thành phố, mỗi hành trình đều mang đến
                            những câu chuyện và kỷ niệm độc đáo riêng. Du lịch không chỉ mở rộng tầm nhìn của bạn mà còn làm
                            phong phú thêm tâm hồn bạn, khiến bạn trân trọng vẻ đẹp và sự đa dạng của thế giới chúng ta.
                        </p>
                        <div class="about-item-wrap">
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="assets/img/icon/about_1_1.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">
                                        Chất lượng hàng đầu
                                    </h5>
                                    <p class="about-item_text">
                                        Chúng tôi cam kết mang đến cho bạn những trải nghiệm tốt nhất.
                                    </p>
                                </div>
                            </div>
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="assets/img/icon/about_1_2.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">
                                        Hướng dẫn viên chuyên nghiệp
                                    </h5>
                                    <p class="about-item_text">
                                        Dịch vụ của chúng tôi được cung cấp bởi các chuyên gia hàng đầu trong ngành.
                                    </p>
                                </div>
                            </div>
                            <div class="about-item style2">
                                <div class="about-item_img"><img src="assets/img/icon/about_1_3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">
                                        Hỗ trợ 24/7
                                    </h5>
                                    <p class="about-item_text">
                                        Chúng tôi luôn sẵn lòng hỗ trợ bạn mọi lúc, mọi nơi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="contact.html" class="th-btn style3 th-icon">Liên hệ với chúng tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="4%" data-left="2%">
            <img src="assets/img/shape/shape_2_1.png" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="5%">
            <img src="assets/img/shape/shape_2_2.png" alt="shape">
        </div>
        <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="2%">
            <img src="assets/img/shape/shape_2_3.png" alt="shape">
        </div>
        <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="2%">
            <img src="assets/img/shape/shape_2_4.png" alt="shape">
        </div>
    </div>


    <div class="elements-sec bg-white overflow-hidden">
        <div class="container-fluid">
            <div class="tags-container relative"></div>
        </div>
    </div>
    <section class="team-area3 position-relative bg-top-center space" data-bg-src="assets/img/bg/team_bg_2.jpg">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title">Meet with Guide</span>
                <h2 class="sec-title">
                    Gặp gỡ đội ngũ của chúng tôi
                </h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider3 has-shadow" id="teamSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Michel Smith</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_2.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_2.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Janny Willson</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_3.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jacob Jones</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Maria Prova</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_2.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_5.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Rebeka Maliha</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_3.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_6.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Alif Mahmud</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_1.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Guy Hawkins</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-grid">
                                <div class="team-img">
                                    <img src="assets/img/team/team_img_2.jpg" alt="Team">
                                </div>
                                <div class="team-img2">
                                    <img src="assets/img/team/team_1_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.html">Jenny Wilson</a></h3>
                                        <span class="team-desig">Tourist Guide</span>


                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="slider-pagination"></div>

                </div>
                <button data-slider-prev="#teamSlider3" class="slider-arrow slider-prev"><img
                        src="assets/img/icon/right-arrow2.svg" alt=""></button>
                <button data-slider-next="#teamSlider3" class="slider-arrow slider-next"><img
                        src="assets/img/icon/left-arrow2.svg" alt=""></button>
            </div>
        </div>
    </section>

    <div class="sidebar-gallery-area space">
        <div class="container-fluid">
            <div class="slider-area">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"centeredSlides":"true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_1.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_2.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_3.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_4.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_5.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_1.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_2.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_3.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_4.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_5.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img">
                                <img src="assets/img/gallery/gallery_4_2.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
