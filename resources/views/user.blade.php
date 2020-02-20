 @extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="table-responsive" style="margin-top: 15px;">
            <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 50%;margin: auto;">
                <caption style="text-align: center">
                    <h3 style="color: #1b1e21">(( اطلاعات کاربر ))</h3>
                </caption>
                <tbody>
                <tr>
                    <td>شناسه:</td>
                    <td>{{ $user->id }}</td>
                </tr>
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
                <tr>
                    <td> وضعیت: </td>
                    @if($user -> trash == 1)
                        <td> در سطل زباله (: </td>
                    @elseif($user->verify==0)
                        <td> تایید نشده (: </td>
                    @else
                        <td> فعال </td>
                    @endif
                </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center;margin-top: 5px;">
            <a href="{{ route('users.edit',$user -> id) }}" class="btn bt-profile" role="button">ویرایش کاربر</a>
            <a href="{{ route('users.games',$user -> id) }}" class="btn bt-profile" role="button">بازی‌های کاربر</a>


          <!-- Button delete modal -->
            <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id03').style.display='flex'" style="width:auto;">
                حذف حساب کاربری
            </a>

            @if($user -> trash == 1)
                <!-- Button  replace from trash modal -->
                    <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id05').style.display='flex'" style="width:auto;">
                        بازگردانی از زباله دان
                    </a>

                <a href="{{ route('users.trash') }}" class="btn btn-dark">{{ __('بازگشت') }}</a>
            @elseif($user->trash == 0)
            <!-- Button  move to trash modal -->
                <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id04').style.display='flex'" style="width:auto;">
                    انتقال به زباله دان
                </a>
                <a href="{{ route('users.index') }}" class="btn bt-profile">{{ __('بازگشت') }}</a>
            @endif

            <!-- Delete Modal -->
            <div id="id03" class="modal container-fluid">

                <form method="post" class="modal-content" style="height: fit-content;padding: 5px;" action="{{ route('users.destroy',$user->id) }}" aria-label="{{ __('deleteUser') }}">
                    {{method_field('delete')}}
                    @csrf
                    <div class="container-fluid per  del-style" style="    width: 100%;margin-top: 0;height: 100px;">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="بستن">&times;</span>
                        <p> آیا نسبت به حذف حساب کاربری این کاربر مطمئن هستید؟</p>
                        <input class="btn btn-danger"  type="submit" value="حذف حساب کاربری">
                    </div>
                </form>
            </div>
            <!-- trash Modal -->
            <div id="id04" class="modal container-fluid">
                <form method="post"  class="modal-content" style="height: fit-content;padding: 5px;" action="{{ route('users.moveToTrash',$user->id) }}" aria-label="{{ __('moveToTrash') }}">
                    {{method_field('put')}}
                    @csrf
                    <div class="container-fluid per  del-style" style="    width: 100%;margin-top: 0;height: 100px;">
                        <span onclick="document.getElementById('id04').style.display='none'" class="close" title="بستن">&times;</span>
                        <p>آیا نسبت به انتقال این حساب کاربری به زباله دان مطمئن هستید؟</p>
                        <input class="btn btn-danger" type="submit" value="انتقال به زباله دان">
                    </div>
                </form>
            </div>
            <!-- replace Modal -->
            <div id="id05" class="modal container-fluid">
                <form method="post" class="modal-content" style="height: fit-content;padding: 5px;" action="{{ route('users.replaceFromTrash',$user->id) }}" aria-label="{{ __('replaceFromTrash') }}">
                    {{method_field('put')}}
                    @csrf
                    <div class="container-fluid per  del-style" style="    width: 100%;margin-top: 0;height: 100px;">
                        <span onclick="document.getElementById('id05').style.display='none'" class="close" title="بستن">&times;</span>
                        <p>آیا نسبت به بازگردانی این حساب کاربری از زباله دان مطمئن هستید؟</p>
                        <input class="btn btn-danger" type="submit" value="بازگردانی از زباله دان">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection