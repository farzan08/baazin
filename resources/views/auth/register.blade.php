@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-color: hsl(204, 79%, 20%);color: gold;">عضویت
            </div>
            <form method="POST" action="{{ route('register') }}" class="validate-input login100-form"  aria-label="{{ __('Register') }}">
                @csrf

                <div class="wrap-input100 validate-form " datfa-validate="name is required">

                    <label for="name">{{ __('نام:') }}</label>
                        <input id="name" type="text" class="input100 form-control{{ $errors -> has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if($errors -> has('name'))
                                <strong style="color:red;">{{ $errors -> first('name') }}</strong>
                        @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="family is required">
                    <label for="family">{{ __('نام خانوادگی:') }}</label>
                        <input id="family" type="text" class="input100 form-control{{ $errors -> has('family') ? ' is-invalid' : '' }}" name="family" value="{{ old('family') }}" required autofocus>
                        @if($errors -> has('family'))
                                <strong style="color:red;">{{ $errors -> first('family') }}</strong>
                        @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="username is required">
                    <label for="username">{{ __('نام کاربری:') }}</label>
                        <input id="username" type="text" class="input100 form-control{{ $errors -> has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                        @if($errors -> has('username'))
                                <strong style="color:red;">{{ $errors -> first('username') }}</strong>
                        @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="cellphone is required">
                    <label for="cellphone">{{ __('شماره همراه:') }}</label>
                        <input id="cellphone"  type="text" class="input100 form-control{{ $errors -> has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}" required autofocus>
                        @if($errors -> has('cellphone'))
                                <strong style="color:red;">{{ $errors -> first('cellphone') }}</strong>
                        @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="password is required">

                    <label for="password">{{ __('رمز عبور:') }}</label>
                        <input id="password" type="password" class="input100 form-control{{ $errors -> has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if($errors -> has('password'))
                                <strong style="color:red;">{{ $errors -> first('password') }}</strong>
                        @endif
                </div>
                <div class="wrap-input100 validate-input" data-validate="password is required">
                    <label for="password-confirm">{{ __('تکرار رمز عبور:') }}</label>
                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required>
                </div>
                <br><br>
                <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('عضویت') }}
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
