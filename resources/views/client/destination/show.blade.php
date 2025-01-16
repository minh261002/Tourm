@extends('client.layouts.master')
@section('title', $destination->name)
@section('content')
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single">
                        <div class="service-img"><img src="
                            {{ $destination->image }}"
                                alt="" width="100%">
                        </div>
                        <div class="page-content d-block">
                            <div class="page-meta mt-50 mb-45">

                                @if ($destination->is_home == true)
                                    <span class="page-tag bg-success">Điểm đến nổi bật</span>
                                @endif

                                <span class="ratting"><i class="fa-sharp fa-solid fa-star"></i><span>4.8</span></span>
                            </div>
                            <h2 class="box-title">
                                {{ $destination->name }}
                            </h2>

                            <p>
                                {!! $destination->description !!}
                            </p>
                        </div>

                        <div class="destination-gallery-wrapper">
                            <h3 class="page-title mt-30 mb-30">Bộ sưu tập ảnh</h3>

                            <div class="row gy-4 gallery-row filter-active">
                                @php
                                    $gallery = json_decode($destination->gallery) ?? [];
                                @endphp

                                @forelse ($gallery as $item)
                                    <div class="col-xxl-auto filter-item">
                                        <div class="gallery-box style3">
                                            <div class="gallery-img global-img">
                                                <img src="{{ $item }}" alt="gallery image">
                                                <a href="{{ $item }}" class="icon-btn popup-image"><i
                                                        class="fal fa-magnifying-glass-plus"></i></a>
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

                        <div class="th-comments-wrap style2 mt-5">
                            <h2 class="blog-inner-title h4">Đánh giá (3)</h2>
                            {{-- <ul class="comment-list">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h3 class="name">Adam Jhon</h3>
                                            <div class="commented-wrapp">
                                                <span class="commented-on">20 Jun, 2024</span>
                                                <span class="commented-time">08:56pm </span>
                                                <span class="comment-review">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text">Credibly pontificate transparent quality vectors with quality
                                                mindshare. Efficiently
                                                architect worldwide strategic theme areas after user.</p>
                                            <div class="reply_and_edit">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="th-comment-item">
                                            <div class="th-post-comment">
                                                <div class="comment-avater">
                                                    <img src="assets/img/blog/comment-author-4.jpg" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="">
                                                        <h3 class="name">Maria Willson</h3>
                                                        <div class="commented-wrapp">
                                                            <span class="commented-on">23 Jun, 2024</span>
                                                            <span class="commented-time">08:56pm </span>
                                                            <span class="comment-review">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p class="text">It is different from airport transfer or port
                                                        transfer, which are services
                                                        that pick you up</p>
                                                    <div class="reply_and_edit">
                                                        <i class="fa-solid fa-thumbs-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-5.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <div class="">
                                                <h3 class="name">Michel Edwards</h3>
                                                <div class="commented-wrapp">
                                                    <span class="commented-on">27 Jun, 2024</span>
                                                    <span class="commented-time">08:56pm </span>
                                                    <span class="comment-review">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="text">Credibly pontificate transparent quality vectors with quality
                                                mindshare. Efficiently
                                                architect worldwide strategic theme areas after user.</p>
                                            <div class="reply_and_edit">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul> --}}
                        </div> <!-- Comment end --> <!-- Comment Form -->
                        <div class="th-comment-form ">
                            <div class="row">
                                <h3 class="blog-inner-title h4 mb-2">Leave a Reply</h3>
                                <p class="mb-25">Your email address will not be published. Required fields are marked</p>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Full Name*" class="form-control" required>
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Email*" class="form-control" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" placeholder="Website" class="form-control" required>
                                    <i class="far fa-globe"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Comment*" class="form-control"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="checkbox" id="html">
                                    <label for="html">Save my name, email, and website in this browser for the next
                                        time I
                                        comment.</label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn">Send Message<img src="assets/img/icon/plane2.svg"
                                            alt=""></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-3">
                    <aside class="sidebar-area style2">
                        @include('client.destination.components.recent-post')

                        @include('client.destination.components.contact')
                    </aside>
                </div>

            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="12%">
            <img src="{{ asset('assets/img/shape/shape_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="8%">
            <img src="{{ asset('assets/img/shape/shape_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="5%">
            <img src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape">
        </div>
    </section>
@endsection
