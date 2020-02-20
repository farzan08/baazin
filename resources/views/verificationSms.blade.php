@extends('layouts.app')

@section('content')
    <div class="container-login100" style="min-height: 76.8vh;">
        <div class="wrap-login100">
            <form method="POST" class="login100-form" action="{{route('verification.check')}}" aria-label="{{ __('verification sms') }}">
                @csrf
                {{--{{method_field('put')}}--}}
                <div class="wrap-input100">
                    <label for="sms" class="col-form-label text-md-right">{{ __('کد ارسال شده:') }}</label>
                    <input id="sms" type="text" class="form-control{{ $errors -> has('sms') ? ' is-invalid' : '' }}" name="sms"  required autofocus>
                    @if (session('error'))
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ session('error') }}</strong>
                        </span>
                    @endif
                    @if($errors -> has('sms'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors -> first('sms') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="container-login100-form-btn">
                    <input type="submit" class="btn bt-profile" value="ارسال" style="margin-left: 7px;">
                    <a href="{{ url('/register') }}" class="btn bt-profile">
                    {{ __('بازگشت') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
