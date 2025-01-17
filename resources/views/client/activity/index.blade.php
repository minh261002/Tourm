@extends('client.layouts.master')
@section('title', 'Hoạt động giải trí')
@section('content')
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <form method="GET">
                            @include('client.activity.components.search')

                            @include('client.activity.components.category')

                            @include('client.activity.components.filter-price')

                            <button type="submit" class="th-btn style6">Tìm kiếm</button>
                        </form>
                    </aside>
                </div>

                <div class="col-xxl-8 col-lg-7">
                    <div class="row gy-24 gx-24">
                        @forelse ($activities as $activity)
                            <div class="col-md-4">
                                <div class="tour-box th-ani">
                                    <div class="tour-box_img global-img">
                                        <a href="{{ route('activity.show', $activity->slug) }}">
                                            <img src="{{ asset($activity->image) }}" alt="{{ $activity->name }}"
                                                style="height: 300px; object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title"><a
                                                href="{{ route('activity.show', $activity->slug) }}">{{ limit_text($activity->name, 30) }}</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                    style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of 5 based on <span
                                                        class="rating">4.8</span>(4.8
                                                    Rating)</span></div>
                                            <a href="{{ route('activity.show', $activity->slug) }}"
                                                class="woocommerce-review-link">(<span class="count">4.8</span>
                                                Rating)</a>
                                        </div>

                                        <h4 class="tour-box_price fs-5 fw-bold color-dark mb-4">
                                            @if ($activity->sale_price && $activity->sale_price < $activity->price)
                                                <del>{{ format_price($activity->price) }}</del>
                                                <ins>{{ format_price($activity->sale_price) }}</ins>
                                            @else
                                                {{ format_price($activity->price) }}
                                            @endif
                                        </h4>

                                        <div class="tour-meta">
                                            <div class="tour-info">
                                                <i class="fa-light fa-calendar-alt"></i>
                                                <span>{{ $activity->date }}</span>
                                                <span>{{ $activity->time }}</span>
                                            </div>
                                            <div class="tour-info">
                                                <i class="fa-light fa-map-marker-alt"></i>
                                                <span>{{ $activity->destinations->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class="alert alert-warning">Không tìm thấy hoạt động nào</div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
