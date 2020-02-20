@extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ویرایش اطلاعات کاربر') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update',$user->id) }}" aria-label="{{ __('editUser') }}">
                            @csrf
                            {{method_field('put')}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors -> has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user -> name }}" required autofocus>

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
                                    <input id="family" type="text" class="form-control{{ $errors -> has('family') ? ' is-invalid' : '' }}" name="family" value="{{ $user -> family }}" required autofocus>

                                    @if($errors->has('family'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('family') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری:') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control{{ $errors -> has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user -> username }}" required autofocus>

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
                                    <input id="cellphone" type="text" class="form-control{{ $errors -> has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ $user -> cellphone }}" required autofocus>

                                    @if($errors -> has('cellphone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors -> first('cellphone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __(' ویرایش اطلاعات کاربر ') }}</button>
                                    <a href="{{ route('users.show',$user->id) }}" class="btn btn-dark">{{ __('بازگشت') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
