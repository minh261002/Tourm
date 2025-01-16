@extends('client.layouts.master')
@section('title', 'Điểm đến')
@section('content')
    <section class="space">
        <div class="container">
            <div class="th-sort-bar">
                @include('client.destination.components.sort-bar')
            </div>
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel"
                            aria-labelledby="tab-destination-grid">
                            <div class="row gy-30">
                                @forelse ($destinations as $destination)
                                    <div class="col-xxl-4 col-xl-6">
                                        <div class="tour-box th-ani">
                                            <div class="tour-box_img global-img">
                                                <a href="{{ route('destination.show', $destination->slug) }}">
                                                    <img src="{{ $destination->image }}" alt="{{ $destination->name }}">
                                                </a>
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title"><a
                                                        href="{{ route('destination.show', $destination->slug) }}">
                                                        {{ $destination->name }}
                                                    </a></h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img"
                                                        aria-label="Rated 5.00 out of 5">
                                                        <span style="width:100%">Rated
                                                            <strong class="rating">5.00</strong> out of 5 based on <span
                                                                class="rating">4.8</span>(4.8
                                                            Rating)</span>
                                                    </div>
                                                    <a href="{{ route('destination.show', $destination->slug) }}"
                                                        class="woocommerce-review-link">(<span class="count">4.8</span>
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                        )</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p>Không có dữ liệu</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                        <div class="tab-pane fade " id="tab-list" role="tabpanel" aria-labelledby="tab-destination-list">
                            <div class="row gy-30">
                                @forelse($destinations as $destination)
                                    <div class="col-12">
                                        <div class="tour-box style-flex th-ani" style="height: 400px">
                                            <div class="tour-box_img global-img">
                                                <a href="{{ route('destination.show', $destination->slug) }}">
                                                    <img src="{{ asset($destination->image) }}"
                                                        alt="{{ $destination->name }}">
                                                </a>
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title"><a
                                                        href="{{ route('destination.show', $destination->slug) }}">
                                                        {{ $destination->name }}
                                                    </a></h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img"
                                                        aria-label="Rated 5.00 out of 5">
                                                        <span style="width:100%">Rated
                                                            <strong class="rating">5.00</strong> out of 5 based on <span
                                                                class="rating">4.8</span>(4.8
                                                            Rating)</span>
                                                    </div>
                                                    <a href="{{ route('destination.show', $destination->slug) }}"
                                                        class="woocommerce-review-link">(<span class="count">4.8</span>
                                                        Rating)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p>Không có dữ liệu</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="th-pagination text-center mt-60 mb-0">
                        {{ $destinations->links('client.layouts.partials.pagination') }}
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area style2">
                        @include('client.destination.components.recent-post')

                        @include('client.destination.components.contact')
                    </aside>
                </div>

            </div>

        </div>
    </section>
@endsection
