@extends('client.layouts.master')
@section('title', 'Đăng ký')
@section('content')
    <div style="padding: 100px 0">
        <div class="container" style="max-width: 600px;">
            <h3 class="box-title mb-30 text-center fs-2">
                Đăng ký
            </h3>
            <div class="th-login-form">
                <form action="{{ route('register.post') }}" method="POST" class="th-form">
                    @csrf

                    <div class="row">
                        <div class="form-group col-12">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group col-12">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group col-12">
                            <label>Mật khẩu</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="password" id="pasword">
                                <div class="position-absolute top-50 end-0 translate-middle-y me-2"
                                    style="cursor: pointer;">
                                    <i class="fas fa-eye" id="togglePassword"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Nhập lại mật khẩu</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation">
                                <div class="position-absolute top-50 end-0 translate-middle-y me-2"
                                    style="cursor: pointer;">
                                    <i class="fas fa-eye" id="togglePasswordConfirm"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-btn mb-20 col-12">
                            <button class="th-btn btn-fw th-radius2 ">Đăng ký</button>
                        </div>

                        <div class="form-group
                            col-12 text-center">
                            <p>Bạn đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập ngay</a></p>
                        </div>
                    </div>

                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var x = document.getElementById('pasword');
            if (x.type === 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
        });

        document.getElementById('togglePasswordConfirm').addEventListener('click', function() {
            var x = document.getElementById('password_confirmation');
            if (x.type === 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
        });
    </script>
@endpush
