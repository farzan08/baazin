@extends('layouts.adminapp')

@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">مدیریت کاربران</div>
                    <div class="card-body">
                        <div class="table-responsive" style="margin-top: 15px;">
                            <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 100%;margin: auto;">
                                <caption style="text-align: center">
                                    <h3 style="color: #1b1e21">(( اطلاعات کاربران ))</h3>
                                </caption>
                                <thead>
                                    <td class="text-center">شماره</td>
                                    <td class="text-center">نام</td>
                                    <td class="text-center">نام خانوادگی</td>
                                    <td class="text-center">نام کاربری</td>
                                    <td class="text-center">نمایش اطلاعات</td>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->family }}</td>
                                    <td class="text-center">{{ $user->username }}</td>
                                    <td class="text-center"><a href="{{ route('users.show',$user->id) }}">مشاهده</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$users->links()}}
                            <a href="{{ route('dashboard') }}" class="btn bt-profile">{{ __('بازگشت') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
