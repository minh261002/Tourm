@extends('client.layouts.master')
@section('title', 'Đặt lại mật khẩu')
@section('content')
    <div style="padding: 100px 0">
        <div class="container" style="max-width: 600px;">
            <h3 class="box-title mb-30 text-center fs-2">
                Đặt lại mật khẩu
            </h3>
            <div class="th-login-form">
                <form action="{{ route('password.update') }}" method="POST" class="th-form">
                    @csrf

                    <input type="hidden" name="token" value="{{ request()->get('token') }}">

                    <div class="row">
                        <div class="form-group col-12">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ request()->get('email') }}" readonly>
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
                                <input type="password" class="form-control" name="password" id="paswordConfirm">
                                <div class="position-absolute top-50 end-0 translate-middle-y me-2"
                                    style="cursor: pointer;">
                                    <i class="fas fa-eye" id="togglePasswordConfirm"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-btn mb-20 col-12">
                            <button class="th-btn btn-fw th-radius2 ">
                                Cập nhật mật khẩu
                            </button>
                        </div>

                        <div class="form-group
                            col-12 text-center">
                            <a href="{{ route('login') }}">Quay lại đăng nhập</a>
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
            var x = document.getElementById('paswordConfirm');
            if (x.type === 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
        });
    </script>
@endpush
