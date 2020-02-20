@extends('layouts.app')

@section('content')
        <div class="carousel fade-carousel slide carousel-fade" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1">
                        <div class="overlay"></div>
                    </div>
                    <div class="hero">
                        <hgroup>
                            <h1>بازی loopy نیاز به محتوا</h1>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button"><a href="/games/2" style="color: gold;text-decoration: none">شروع بازی</a> </button>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2">
                        <div class="overlay"></div>
                    </div>
                    <div class="hero">
                        <hgroup>
                            <h1>بازی ballot نیاز به محتوا</h1>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button"><a href="/games/3" style="color: gold;text-decoration: none">شروع بازی</a></button>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3">
                        <div class="overlay"></div>
                    </div>
                    <div class="hero">
                        <hgroup>
                            <h1>بازی crowdmaster نیاز به محتوا</h1>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button"><a href="/games/1" style="color: gold;text-decoration: none">شروع بازی</a></button>
                    </div>
                </div>
            </div>
        </div>




        <section id="team" class="pb-5">
            <div class="container">
                <h5 class="section-title h1">جدیدترین بازی ها</h5>
                <div class="row">
                    <!-- Team member -->
                    @foreach($games as $game)
                    <div class="col-xs-12 col-sm-6 col-md-4 float-right">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center card-pad">
                                            <p><img class=" img-fluid" src="picture/2.jpg" alt="card image"></p>
                                            <h3 class="card-title" style="padding-top: 20px">{{$game->name}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside ">
                                    <div class="card card-style">
                                        <div class="card-body text-center mt-4 ">
                                            <h4 class="card-title ">{{$game->name}}</h4>
                                            <p class="card-text persian-card">
                                                {{$game->summary}}
                                                نیاز به محتوا
                                            </p>
                                        </div>
                                        <div class="card-footer footercard ">
                                            <a href="{{ route('games.show',$game->id) }}" class="btn btn-primary btn-md "><i class="fa fa-plus plus-icon "> شروع بازی</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- ./Team member -->

                </div>
            </div>
        </section>
@endsection