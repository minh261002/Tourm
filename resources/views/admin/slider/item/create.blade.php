@extends('admin.layout.master')
@section('title', 'Thêm slider item mới')

@push('styles')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-header d-print-none">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">
                        Quản lý slider item
                    </h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.slider.item.index', $slider->id) }}">
                                    Quản lý slider item
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Thêm slider item mới
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <form action="{{ route('admin.slider.item.store', $slider->id) }}" method="POST">
                @csrf

                <input type="hidden" name="slider_id" value="{{ $slider->id }}">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="card-title mb-0">
                                    Item: <a
                                        href="{{ route('admin.slider.item.index', $slider->id) }}">{{ $slider->name }}</a>
                                </h2>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="title" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="link" class="form-label">Đường dẫn </label>
                                        <input type="text" class="form-control" id="link" name="link"
                                            value="{{ old('link') }}">
                                        @error('link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="position" class="form-label">Vị trí</label>
                                        <input type="number" class="form-control" id="position" name="position"
                                            value="{{ old('position') }}">
                                        @error('position')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h2 class="card-title">Ảnh</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <span class="image img-cover image-target"><img class="w-100"
                                                    src="{{ old('image') ? old('image') : asset('admin/images/not-found.jpg') }}"
                                                    alt=""></span>
                                            <input type="hidden" name="image" value="{{ old('image') }}">
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h2 class="card-title">Ảnh mobile</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <span class="image img-cover image-target"><img class="w-100"
                                                    src="{{ old('mobile_image') ? old('mobile_image') : asset('admin/images/not-found.jpg') }}"
                                                    alt=""></span>
                                            <input type="hidden" name="mobile_image" value="{{ old('mobile_image') }}">
                                        </div>
                                        @error('image_mobile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-3">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="card-title">Thao tác</h2>
                            </div>
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <a href="{{ route('admin.slider.item.index', $slider->id) }}"
                                        class="w-100 btn btn-secondary">Quay
                                        lại</a>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="w-100 btn btn-primary">Thêm mới</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/js/finder.js') }}"></script>
@endpush