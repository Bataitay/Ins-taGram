<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <!-- FAVIVON -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

        <div class="container">
            <div class="main-container">
                <div class="main-content">
                    <div class="slide-container" style="background-image: url( assets/images/backgroudlogin.png )">
                        <div class="slide-content" id="slide-content">
                            <img src="{{ asset('assets/images/1.png') }}" alt="slide image" class="active">
                            <img src="{{ asset('assets/images/2.png') }}" alt="slide image">
                            <img src="{{ asset('assets/images/3.png') }}" alt="slide image">
                            <img src="{{ asset('assets/images/4.png') }}" alt="slide image">
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="form-content box">
                            <div class="logo">
                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="Instagram logo"
                                    class="logo-light">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Instagram logo"
                                    class="logo-dark">
                            </div>
                            <div class="signin-form" id="signin-form">
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="animate-input">
                                            <span>
                                                Số điện thoại hoặc email
                                            </span>
                                            <input type="email" name="email" :value="old('email')" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="animate-input">
                                            <span>
                                                Mật khẩu 
                                            </span>
                                            <input type="password" name="password" required autocomplete="current-password">
                                            {{-- <button>Show</button> --}}
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn-login_one btn-primary" >
                                            Đăng nhập
                                        </button>
                                    </div>
                                </form>

                                <div class="divine">
                                    <div></div>
                                    <div>Hoặc</div>
                                    <div></div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-fb">
                                        <img src="{{ asset('assets/images/facebook-icon.png') }}" alt="">
                                        <span>Đăng Nhập bằng Facebook</span>
                                    </button>
                                </div>
                                <a href="#" class="forgot-pw">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="box goto">
                            <p>
                                Bạn có tài khoản chưa?
                                <a href="{{ route('register') }}">Đăng ký</a>
                            </p>
                        </div>

                        <div class="app-download">
                            <p>Tải ứng dụng.</p>
                            <div class="store-link">
                                <a href="#">
                                    <img src="{{ asset('assets/images/app-store.png') }}" alt="app store">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/gg-play.png') }}" alt="google play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- APP JS -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>

    </html>
