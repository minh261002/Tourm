<div class="destination-area position-relative overflow-hidden ">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Best Place For You
            </span>
            <h2 class="sec-title">
                Top điểm đến nổi bật
            </h2>

        </div>
        <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 2; $i++)
                    @foreach ($destinations as $destination)
                        <div class="swiper-slide">
                            <div class="destination-box gsap-cursor">
                                <div class="destination-img">
                                    <img src="{{ $destination->image }}" alt="{{ $destination->name }}">
                                    <div class="destination-content">
                                        <div class="media-left">
                                            <h4 class="box-title">
                                                <a href="destination-details.html">
                                                    {{ $destination->name }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="">
                                            <a href="destination-details.html" class="th-btn style2 th-icon">Xem
                                                thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>
    </div>
</div>
