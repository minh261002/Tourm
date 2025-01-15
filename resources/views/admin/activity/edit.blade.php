@extends('admin.layout.master')
@section('title', 'Chỉnh sửa thông tin')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')
    <div class="container-fluid">
        <div class="page-header d-print-none">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">
                        Quản lý hoạt động
                    </h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.activity.index') }}">
                                    Quản lý hoạt động
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Chỉnh sửa thông tin
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <form action="{{ route('admin.activity.update') }}" method="post">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $activity->id }}">

                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Thông tin hoạt động
                                </h3>
                            </div>

                            <div class="row card-body">
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">
                                        Tên hoạt động
                                    </label>

                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ $activity->name }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="destination_ids" class="form-label">
                                        Thuộc điểm đến
                                    </label>

                                    <select class="form-select select2" name="destination_id" id="destination_id">
                                        <option value="">Chọn điểm đến</option>
                                        @foreach ($destinations as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $activity->destination_id == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    @include('admin.components.pick-address', [
                                        'label' => 'Địa chỉ cụ thể',
                                        'name' => 'address',
                                        'value' => $activity->address,
                                    ])
                                    <input type="hidden" name="lat" value="{{ $activity->lat }}">
                                    <input type="hidden" name="lng" value="{{ $activity->lng }}">
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label for="price">Giá</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                        value="{{ $activity->price }}">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="sale_price">Giảm giá</label>
                                    <input type="text" class="form-control" name="sale_price" id="sale_price"
                                        value="{{ $activity->sale_price }}">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="date">Ngày diễn ra</label>
                                    <input type="date" class="form-control" name="date" id="date"
                                        value="{{ $activity->date }}">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="time">Thời gian diễn ra</label>
                                    <input type="time" class="form-control" name="time" id="time"
                                        value="{{ $activity->time }}">
                                </div>


                                <div class="form-group">
                                    <label for="desc" class="form-label">
                                        Mô tả
                                    </label>

                                    <textarea class="ck-editor" name="desc" id="desc">{{ $activity->desc }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="card-title mb-0">Bộ sưu tập ảnh</h2>
                                <div class="upload-album"><a href="" class="upload-picture">Tải lên</a></div>
                            </div>

                            <div class="card-body">
                                @php
                                    $gallery = old('gallery') ?? (json_decode($activity->gallery) ?? []);
                                @endphp
                                <div class="col-lg-12">
                                    @if (!isset($gallery) || count($gallery) == 0)
                                        <div class="click-to-upload">
                                            <div class="icon">
                                                <a href="" class="upload-picture">
                                                    <svg style="width:80px;height:80px;fill: #d3dbe2;margin-bottom: 10px;"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                                        <path
                                                            d="M80 57.6l-4-18.7v-23.9c0-1.1-.9-2-2-2h-3.5l-1.1-5.4c-.3-1.1-1.4-1.8-2.4-1.6l-32.6 7h-27.4c-1.1 0-2 .9-2 2v4.3l-3.4.7c-1.1.2-1.8 1.3-1.5 2.4l5 23.4v20.2c0 1.1.9 2 2 2h2.7l.9 4.4c.2.9 1 1.6 2 1.6h.4l27.9-6h33c1.1 0 2-.9 2-2v-5.5l2.4-.5c1.1-.2 1.8-1.3 1.6-2.4zm-75-21.5l-3-14.1 3-.6v14.7zm62.4-28.1l1.1 5h-24.5l23.4-5zm-54.8 64l-.8-4h19.6l-18.8 4zm37.7-6h-43.3v-51h67v51h-23.7zm25.7-7.5v-9.9l2 9.4-2 .5zm-52-21.5c-2.8 0-5-2.2-5-5s2.2-5 5-5 5 2.2 5 5-2.2 5-5 5zm0-8c-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3-1.3-3-3-3zm-13-10v43h59v-43h-59zm57 2v24.1l-12.8-12.8c-3-3-7.9-3-11 0l-13.3 13.2-.1-.1c-1.1-1.1-2.5-1.7-4.1-1.7-1.5 0-3 .6-4.1 1.7l-9.6 9.8v-34.2h55zm-55 39v-2l11.1-11.2c1.4-1.4 3.9-1.4 5.3 0l9.7 9.7c-5.2 1.3-9 2.4-9.4 2.5l-3.7 1h-13zm55 0h-34.2c7.1-2 23.2-5.9 33-5.9l1.2-.1v6zm-1.3-7.9c-7.2 0-17.4 2-25.3 3.9l-9.1-9.1 13.3-13.3c2.2-2.2 5.9-2.2 8.1 0l14.3 14.3v4.1l-1.3.1z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="small-text">
                                                <p>Click vào nút "Tải lên" để thêm ảnh</p>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="upload-list {{ isset($gallery) && count($gallery) ? '' : 'hidden' }}">
                                        <ul id="sortable" class="clearfix data-album sortui ui-sortable">
                                            @if (isset($gallery) && count($gallery))
                                                @foreach ($gallery as $key => $val)
                                                    <li class="ui-state-default">
                                                        <div class="thumb">
                                                            <span class="span image img-scaledown">
                                                                <img src="{{ $val }}"
                                                                    alt="{{ $val }}">
                                                                <input type="hidden" name="gallery[]"
                                                                    value="{{ $val }}">
                                                            </span>
                                                            <button class="delete-image">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Trạng thái
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-select" name="status" id="status">
                                        @foreach ($status as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $activity->status == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Danh mục
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-select select2" name="category_id" id="category_id">
                                        @foreach ($categories as $key => $value)
                                            <option value="{{ $key }}"
                                                {{ $activity->category_id == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Ảnh
                                </h3>
                            </div>

                            <div class="card-body">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <span class="image img-cover image-target"><img class="w-100"
                                                src="{{ old('image', $activity->image ?? '') ? old('image', $activity->image ?? '') : asset('admin/images/not-found.jpg') }}"
                                                alt=""></span>
                                        <input type="hidden" name="image"
                                            value="{{ old('image', $activity->image ?? '') }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Thao tác
                                </h3>
                            </div>

                            <div class="card-body d-flex align-items-center justify-content-between gap-4">
                                <a href="{{ route('admin.activity.index') }}" class="btn btn-secondary w-100">
                                    Quay lại
                                </a>

                                <button type="submit" class="btn btn-primary w-100">
                                    Lưu thay đổi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('admin.components.modal-pick-address')
    @include('admin.components.google-map-script', ['lat' => $activity->lat, 'lng' => $activity->lng])
@endsection

@push('scripts')
    <script src="{{ asset('admin/js/finder.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap-5',
            width: "100%",
        });
    </script>
@endpush
