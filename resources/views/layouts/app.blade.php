<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="{{url('css/ui/index.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/signup.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/navbar.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/footer.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/comments.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/panel.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/profile.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/gamecard.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/login.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/ui/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/ui/main.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/WebFonts/css/fontiran.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/WebFonts/css/style.css')}}">

    {{--<link rel="stylesheet" href="css/ui/index.css">--}}
   {{-- <link rel="stylesheet" href="css/ui/signup.css">
    <link rel="stylesheet" href="css/ui/navbar.css">
    <link rel="stylesheet" href="css/ui/footer.css">
    <link rel="stylesheet" href="css/ui/comments.css">
    <link rel="stylesheet" href="css/ui/gamepage.css">
    <link rel="stylesheet" href="css/ui/panel.css">
    <link rel="stylesheet" href="css/ui/profile.css">
    <link rel="stylesheet" href="css/ui/gamecard.css">
    <link rel="stylesheet" href="css/ui/login.css">
    <link rel="stylesheet" href="css/ui/slider.css">
    <link rel="stylesheet" href="css/ui/Font/font-face.css">
    <link rel="stylesheet" href="css/ui/shabnam-font-master/dist/font-face.css">--}}
    {{--<script src="js/ui/jquery-3.3.1.min.js"></script>
    <script src="js/ui/script.js"></script>--}}
    <script src="{{url('js/ui/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('js/ui/script.js')}}"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'بازین') }}</title>

    {{--<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}


</head>
<body style="direction: rtl;text-align: right;">
    <div id="app" style="display:flex;    justify-content: space-between;flex-direction: column;min-height: 100vh;">

        {{--menu--}}
        <nav class="navbar navbar-color">
            <div class="container-fluid mob-v">
                {{--amir--}}
                <div class="navbar-header  nav-head-mob collaps-style ul-style ">
                    <button type="button" class="navbar-toggle icon-color" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{--<a class="navbar-brand nav-item-color  " href="index.html">نام سایت</a>--}}
                </div>

                {{--php--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">sasfasf</span>
                </button>--}}
                <div class="collapse navbar-collapse " id="myNavbar">
                    <ul class="nav navbar-nav  navbar-right persian ul-style">
                        <li class="active">
                            <a href="{{ url('/') }}" class="nav-item-color">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="{{ route('games.index') }}" class="nav-item-color">بازی‌ها</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left persian">
                        @auth
                            <li class="dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle nav-item-color" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user() -> username }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right " style="min-width: fit-content;padding: 0;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn bt-profile" style="padding: 5px;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('خروج از حساب کاربری') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @if(Auth::user()->role == 1)
                                <li><a class="nav-item-color" href="{{ url('/dashboard') }}">{{ __('مدیریت سایت') }}</a></li>
                            @endif
                            <li class=" active">
                                <a class="nav-item-color" href="{{ url('/panel') }}"> پنل کاربری </a>
                            </li>
                            {{--<li >
                                <a class="nav-item-color" href="{{ url('/profile') }}"> پروفایل </a>
                            </li>--}}

                        @else
                            {{--<li>
                                <a class="nav-item-color" href="{{ route('login') }}"> ورود </a>
                            </li>--}}
                            <li>
                                <a href="#" class="nav-item-color" onclick="document.getElementById('id01').style.display='flex'" style="width:auto;">
                                    <span class="glyphicon glyphicon-log-in"></span> ورود
                                </a>
                            </li>
                            <li>
                                <a class="nav-item-color" href="{{ route('register') }}">
								 <span class="glyphicon glyphicon-user"></span> عضویت </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        {{--message--}}
        @if (session('warning'))
            <div class="alert alert-danger alert-dismissible" style="direction: rtl;text-align: right;margin-bottom: 0;" >
                <button type="button" class="close alert-type" data-dismiss="alert">&times;</button>
                {{ session('warning') }}

            </div>
        @elseif(session('success'))
            <div class="alert  alert-success alert-dismissible" style="direction: rtl;text-align: right;margin-bottom: 0;">
                <button type="button" class="close alert-type" data-dismiss="alert">&times;</button>
                {{ session('success') }}

            </div>
        @endif

        <div id="id01" class="modal container-fluid">
            <form class="modal-content animate style-login" style="height:500px;" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="بستن">&times;</span>
                    <img src="picture/avatar.png" alt="Avatar" class="avatar">
                </div>

                <div class="container-fluid per">
                    {{--<input type="text" placeholder="نام کاربری" name="uname" required>--}}
                    <input id="username" type="text" placeholder="نام کاربری" class="form-control{{ $errors -> has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                    @if($errors -> has('username'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('username') }}</strong>
                                    </span>
                    @endif

                    {{--<input type="password" placeholder="کلمه عبور" id="password" name="psw" required>--}}
                    <input id="password" type="password" placeholder="رمز عبور" class="form-control{{ $errors -> has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if($errors -> has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors -> first('password') }}</strong>
                        </span>
                    @endif
                    <label for="checkbox-password">
                        <input type="checkbox"  id="checkbox-password" name="remember"> نمایش پسورد
                    </label>
                    <label for="remember">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>مرا به خاطر بسپار
                    </label>


                    <button type="submit" class="btn bt-profile">ورود</button>

                </div>
                <div class="container-fluid per">
                    <span class="psw"> کلمه عبور را <a href="{{ route('password.request') }}">فراموش</a> کرده‌اید؟</span>
                </div>
                <div class="container-fluid lable-pad style-sign-exit">
                    <a class="bt-profile btn cancelbtn" href="{{ route('register') }}">عضویت</a>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn bt-profile">خروج</button>
                </div>
            </form>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="py-5 bg-light footer-color">
            <div class="container">
                <p class="m-0 text-center text-dark">.تمام حقوق معنوی این اثر محفوظ است &copy</p>
                <p class="m-0 text-center text-dark">طراحان:
				 <a href="https://t.me/farzan8" style="color:gold;text-decoration:none;"> سید فرزان فخرایی </a>
				 و <a href="https://t.me/haj_amir_13" style="color:gold;text-decoration:none;">امیر سرتیپی</a>
				 </p>
            </div>
        </footer>
    </div>
</body>
</html>
