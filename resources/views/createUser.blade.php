@extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ثبت کاربر') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}" aria-label="{{ __('creat user') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors -> has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if($errors -> has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="family" class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی:') }}</label>

                                <div class="col-md-6">
                                    <input id="family" type="text" class="form-control{{ $errors -> has('family') ? ' is-invalid' : '' }}" name="family" value="{{ old('family') }}" required autofocus>

                                    @if($errors -> has('family'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('family') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control{{ $errors -> has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    @if($errors -> has('username'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cellphone" class="col-md-4 col-form-label text-md-right">{{ __('شماره همراه:') }}</label>

                                <div class="col-md-6">
                                    <input id="cellphone" type="text" class="form-control{{ $errors -> has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                                    @if($errors -> has('cellphone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('cellphone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور:') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors -> has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if($errors -> has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور:') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <button type="submit" class="btn bt-profile">
                                {{ __('اضافه کردن بازی') }}
                            </button>
                            <a href="{{route('dashboard')}}" class="btn bt-profile">{{ __('بازگشت') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
