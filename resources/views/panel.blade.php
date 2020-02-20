@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>پنل کاربری </h2>
    </div>

    <div id="exTab2 " class="container ">
        <ul class="nav nav-tabs menu-tab">
            <li class="active ">
                <a href="#1" data-toggle="tab">پروفایل</a>
            </li>
            <li><a href="#2" data-toggle="tab">بازی ها</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active  height-panel" id="1">

                <div class="container">
                    <h1 class="h-rtl">پروفایل شما</h1>
                    <hr>
                    <div class="row persian-profile1">
                        <div class="col-md-3">
                            <div class="text-center ">
                                <img src="picture/avatar.png" style="width: 200px;" class="avatar img-circle" alt="پروفایل">
                        
                            </div>
                        </div>

                        <div class="col-md-9 personal-info persian-profile">

                            <h3>اطلاعات کاربری</h3>

                            <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}" aria-label="{{ __('editProfile') }}">
                                @csrf
                                {{method_field('put')}}
                                <div class="form-group dis">
                                    <div class="col-md-8">
                                        <label for="name">{{ __('نام:') }}</label>
                                        <input id="name" type="text" class="bt-input form-control{{ $errors -> has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user() -> name }}" required autofocus>
                                        @if($errors -> has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors -> first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group dis">
                                    <div class="col-md-8">
                                        <label for="family">{{ __('نام خانوادگی:') }}</label>
                                        <input id="family" type="text" class="bt-input form-control{{ $errors -> has('family') ? ' is-invalid' : '' }}" name="family" value="{{ Auth::user() -> family }}" required autofocus>
                                        @if($errors->has('family'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors -> first('family') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group dis">
                                    <div class="col-md-8">
                                        <label for="username">{{ __('نام کاربری:') }}</label>
                                        <input id="username" type="text" class="bt-input form-control{{ $errors -> has('username') ? ' is-invalid' : '' }}" name="username" value="{{ Auth::user() -> username }}" required autofocus>
                                        @if($errors -> has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors -> first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group dis">
                                    <div class="col-md-8">
                                        <label for="cellphone">{{ __('شماره همراه:') }}</label>
                                        <input id="cellphone" type="text" class="bt-input form-control{{ $errors -> has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ Auth::user()-> cellphone }}" required autofocus>

                                        @if($errors -> has('cellphone'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors -> first('cellphone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <h4><strong>تغییر رمز عبور</strong></h4>
                                <p>در صورت تمایل به تغییر رمز عبور خود فیلد های زیر را پر کنید</p>

                                <div class="form-group dis">
                                    <div class="col-md-8">
                                        <label for="newPassword">{{ __('رمز عبور جدید:') }}</label>
                                        <input id="newPassword" type="password" class="bt-input form-control{{ $errors -> has('newPassword') ? ' is-invalid' : '' }}" name="newPassword">

                                        @if($errors -> has('newPassword'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors -> first('newPassword') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group dis">
                                    <div class="col-md-8">
                                        <label for="newPassword-confirm">{{ __('تکرار رمز عبور:') }}</label>
                                        <input id="newPassword-confirm" type="password" class="form-control bt-input" name="newPassword_confirmation">
                                    </div>
                                </div>
                                <div class="form-group dis">
                                    <div class="col-md-8 ">
                                        <input type="submit" class="btn bt-profile" value="ذخیره تغییرات">
                                        <span></span>
                                        <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id02').style.display='flex'" style="width:auto;">
                                            حذف حساب کاربری
                                        </a>
                                        <a href="{{ url('/') }}" class="btn bt-profile">{{ __('بازگشت') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!--delete user Modal -->
            <div id="id02" class="modal container-fluid">

                <form class="modal-content animate style-login" method="post" action="{{ route('profile.destroy') }}" aria-label="{{ __('deleteProfile') }}">
                    {{method_field('delete')}}
                    @csrf
                    <div class="container-fluid per modal-content del-style">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="بستن">&times;</span>
                        <p>کاربر عزیز: آیا نسبت به حذف حساب کاربری خود مطمئن هستید.</p>
                        <input id="password" type="password" placeholder="رمز عبور" class="form-control{{ $errors -> has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if($errors -> has('password'))
                            <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors -> first('password') }}</strong>
                                                         </span>
                        @endif
                        <div class="row del-acc">
                            <input class="btn btn-danger" type="submit" value="حذف حساب کاربری">
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="2">
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
                                                        <h4 class="card-title">{{$game->name }}</h4>

                                                        <p class="card-text persian-card"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="backside ">
                                                <div class="card card-style">
                                                    <div class="card-body text-center mt-4 ">
                                                        <h4 class="card-title ">{{$game->name }}</h4>
                                                        <p class="card-text persian-card">
                                                            {{$game->summary }}
                                                            نیاز به محتوا
                                                        </p>

                                                    </div>
                                                    <div class="card-footer footercard ">
                                                        <a href="{{ route('games.show',$game->id) }}" class="btn btn-primary btn-md "><i class="fa fa-plus plus-icon ">شروع بازی</i></a>
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

            </div>
        </div>
    </div>
@endsection
