@extends('client.layouts.master')
@section('title', 'Quên mật khẩu')
@section('content')
    <div style="padding: 100px 0">
        <div class="container" style="max-width: 600px;">
            <h3 class="box-title mb-30 text-center fs-2">
                Quên mật khẩu
            </h3>
            <div class="th-login-form">
                <form action="{{ route('password.email') }}" method="POST" class="th-form">
                    @csrf

                    <input type="hidden" name="time" value="{{ now() }}" />
                    <input type="hidden" name="device" value="{{ $_SERVER['HTTP_USER_AGENT'] }}" />

                    <div class="row">
                        <div class="form-group col-12">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ old('email') }}">
                        </div>

                        <div class="form-btn mb-20 col-12">
                            <button class="th-btn btn-fw th-radius2" id="forgotButton">Xác thực email</button>
                        </div>

                        <div class="form-group col-12 text-center">
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
        //hiệu ứng loading bằng ajax
        $(document).ready(function() {
            $('#forgotButton').on('click', function(e) {
                e.preventDefault();
                $(this).html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Đang xử lý...'
                );

                $(this).closest('form').submit();
            });
        });
    </script>
@endpush
