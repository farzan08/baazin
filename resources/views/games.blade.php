@extends('layouts.app')

@section('content')
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">بازی ها</h5>
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
                                            <h4 class="card-title">{{$game->name}}</h4>

                                            <p class="card-text persian-card"></p>
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
                                            <a href="{{ route('games.show',$game->id) }}" class="btn btn-primary btn-md"><i class="fa fa-plus plus-icon "> &nbsp;صفحه بازی</i></a>
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
    {{--//کد های قبل--}}
    {{--<div class="container">
        <div class="content">
            <div>
                <ul>
                    @foreach($games as $game)
                        <li><a href="{{ route('games.show',$game->id) }}">{{$game->name}}</a></li>

                    @endforeach
                </ul>
            </div>

        </div>
    </div>--}}
@endsection