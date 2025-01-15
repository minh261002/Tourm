<section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
    <div class="container th-container">
        <div class="title-area text-center">
            <span class="sub-title">Best Place For You
            </span>
            <h2 class="sec-title">
                Top các hoạt động được yêu thích
            </h2>

        </div>

        <div class="swiper categorySlider" id="categorySlide">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 3; $i++)
                    @foreach ($categories as $category)
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="{{ $category->image }}" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="">{{ $category->name }}</a>
                                </h3>
                                <a class="line-btn" href="">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endfor
                {{-- <div class="swiper-slide">
                    <div class="category-card single">
                        <div class="box-img global-img">
                            <img src="assets/img/category/category_1_1.jpg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Cruises</a></h3>
                        <a class="line-btn" href="destination.html">See more</a>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
