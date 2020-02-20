<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--<link rel="stylesheet" href="css/ui/dashbord.css">
    <link rel="stylesheet" href="css/ui/Font">--}}
    <link rel="stylesheet" href="{{url('css/ui/Font')}}">
    <link rel="stylesheet" href="{{url('css/ui/dashbord.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/profile.css')}}">
    <link rel="stylesheet" href="{{url('css/ui/logon.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="js/ui/jquery-3.3.1.min.js"></script>
    <script src="js/ui/script.js"></script>

    <title>مدیریت بازین</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div id="app">
        <div class="nav-side-menu">
            <div class="brand">مدیریت بازین</div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                        <a href="{{url('/')}}"><i class="fa fa-lg fa-fw sidebar-icon "></i> صفحه اصلی</a>
                    </li>
                    <li data-toggle="collapse" data-target="#manage" class="collapsed">
                        <a href="#"><i class="fa  fa-lg fa-fw sidebar-icon"></i> کاربران<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="manage">
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-angle-double-left"></i> تمامی کاربران</a></li>
                        <li><a href="{{ route('users.trash') }}"><i class="fa fa-angle-double-left"></i> زباله دادن کاربران</a></li>
                        <li><a href="{{ route('users.create') }}"><i class="fa fa-angle-double-left"></i> ایجاد کاربر جدید</a></li>
                    </ul>
                    <li data-toggle="collapse" data-target="#settings" class="collapsed">
                        <a href="#"><i class="fa  fa-lg fa-fw sidebar-icon"></i> کامنت‌ها <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="settings">
                        <li><a href="{{ route('comments.sent') }}"><i class="fa fa-angle-double-left"></i> کامنت‌های منتشر شده </a></li>
                        <li><a href="{{ route('comments.index') }}"><i class="fa fa-angle-double-left"></i> کامنت‌های منتشر نشده</a></li>
                    </ul>
                    <li>
                        <a href="{{ route('sms-admin') }}"><i class="fa  fa-lg fa-fw sidebar-icon"></i> پنل‌ پیامک</a>
                    </li>
                </ul>
            </div>
        </div>

        <main class="py-4 main">
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

            @yield('content')
        </main>
    </div>
</body>

</html>