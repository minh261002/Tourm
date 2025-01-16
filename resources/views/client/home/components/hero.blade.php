<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider-1" id="heroSlide1"
        data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
        <div class="swiper-wrapper">
            @foreach ($slider->items as $item)
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset($item->image) }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">
                                    {{ $item->sub_title }}</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    {{ $item->title }}</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ $item->link }}" class="th-btn th-icon"
                                        target="_blank">{{ $item->button_text }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="th-swiper-custom">
            <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
                    src="assets/img/icon/right-arrow.svg" alt=""></button>
            <div class="slider-pagination"></div>
            <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img
                    src="assets/img/icon/left-arrow.svg" alt=""></button>
        </div>

    </div>
</div>
