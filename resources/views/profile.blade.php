@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible" style="direction: rtl;text-align: right;">

            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div class="table-responsive" style="margin-top: 15px;">
        <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 50%;margin: auto;">
            <caption style="text-align: center">
                <h3 style="color: #1b1e21">(( اطلاعات شما ))</h3>
            </caption>
            <tbody>
            <tr>
                <td> نام: </td>
                <td> {{ $user -> name }} </td>
            </tr>
            <tr>
                <td> نام خانوادگی: </td>
                <td> {{ $user -> family }} </td>
            </tr>
            <tr>
                <td> نام کاربری: </td>
                <td> {{ $user -> username }} </td>
            </tr>
            <tr>
                <td> تلفن همراه: </td>
                <td> {{ $user -> cellphone }} </td>
            </tr>
            <tr>
                <td> نقش: </td>
                @if($user -> role == 1)
                    <td> ادمین </td>
                @else
                    <td> کاربر عادی </td>
                @endif
            </tr>
            </tbody>
        </table>
    </div>
    <div style="text-align: center;">
        <a href="{{ route('profile.edit') }}" class="btn btn-dark" role="button">ویرایش پروفایل</a>
        <a href="{{ route('profile.games') }}" class="btn btn-dark" role="button">بازی‌های من</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
            حذف حساب کاربری
        </button>
        <a href="{{ url('/panel') }}" class="btn btn-dark">{{ __('بازگشت') }}</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">حذف حساب کاربری</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>کاربر عزیز: آیا نسبت به حذف حساب کاربری خود مطمئن هستید.</p>
                        <form method="post" action="{{ route('profile.destroy') }}" aria-label="{{ __('deleteProfile') }}">
                            {{method_field('delete')}}
                            @csrf
                            {{--password for deleting acount--}}
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

                            <input class="btn btn-dark" type="submit" value="حذف حساب کاربری">
                        </form>
                        <button style="margin-top: 5px;" type="button" class="btn btn-dark" data-dismiss="modal">انصراف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection