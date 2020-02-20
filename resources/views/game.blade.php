{{--
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <img src="favicon.png" alt="farzan">
    </div>
</body>
</html>
--}}




@extends('layouts.app')
@section('content')
   <div class="product-content container-fluid product-wrap clearfix product-deatil cnt-style">
        <div class="row per-page ">
            <div class="col-sm-11 col-md-11 col-lg-11">
                <div class="product-image">
                    <img src="{{url('picture/630111.jpg')}}" class="img-fluid img-style" alt="Sample photo">
                    نیاز به محتوا
                </div>
            </div>
            <div class="col-md-11 col-sm-11 col-xs-11 game-text">
                <h2 class="name"> {{$game->name}}</h2>
                <hr>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <strong><h1>درباره‌ی بازی</h1></strong>
                    <p>
                        {{$game->about}}
                        نیاز به محتوا
                    </p>
                    <hr>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h4>قیمت محصول : 15000 هزار تومن</h4>
                    <a href="{{ route('startGame',$game->name) }}" class="btn btn-hero btn-lg">شروع بازی </a>
                </div>
                <br>

            </div>

        </div>
        <div class="cmsig">
            <form class="pagecm" method="POST" action="{{ route('storeComment',$game->id) }}" aria-label="{{ __('Comment') }}">
                @csrf
                <div class="form-group form-align">
                    <textarea class="form-control txtarea" placeholder="درباره‌ی بازی نظر دهید "></textarea>
                </div>
                <input type="submit" class="btn btn-hero btn-lg" value="ارسال نظر">
            </form>
            <hr>
        </div>


        <div class="media-body">
            @foreach($game->comments as $comment)
            <div class="well well-lg">
                <h4 class="media-heading text-uppercase reviews">{{$comment->auther}}</h4>
                <p class="media-comment">
                    {{$comment->body}}
                </p>
            </div>
            @endforeach
            <hr>
        </div>
    </div>

@endsection
