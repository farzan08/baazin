@extends('layouts.adminapp')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">داشبورد</div>
                <div class="card-body">
                        <a href="{{ route('users.index') }}" class="btn bt-profile">{{ __('مدیریت کاربران') }}</a>
                        <a href="{{ route('users.trash') }}" class="btn bt-profile">{{ __('زباله دان کاربران') }}</a>
                        <a href="{{ route('users.create') }}" class="btn bt-profile">{{ __('ایجاد کاربر جدید') }}</a>
                        <a href="{{ route('comments.sent') }}" class="btn bt-profile">{{ __(' کامنت‌ها منتشر شده') }}</a>
                        <a href="{{ route('comments.index') }}" class="btn bt-profile">{{ __(' کامنت‌ها منتشر نشده') }}</a>
                        <a href="{{ route('sms-admin') }}" class="btn bt-profile">{{ __(' مدیریت پیام ها') }}</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
