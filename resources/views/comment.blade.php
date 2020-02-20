@extends('layouts.adminapp')

@section('content')
    <div class="container">

        <div class="table-responsive" style="margin-top: 15px;">
            <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 50%;margin: auto;">
                <caption style="text-align: center">
                    <h3 style="color: #1b1e21">(( اطلاعات کامنت ))</h3>
                </caption>
                <tbody>
                <tr>
                    <td>شناسه:</td>
                    <td>{{ $comment->id }}</td>
                </tr>
                <tr>
                    <td> نویسنده: </td>
                    <td> {{ $comment -> auther }} </td>
                </tr>
                <tr>
                    <td> دیدگاه: </td>
                    <td> {{ $comment -> body }} </td>
                </tr>
                <tr>
                    <td> نام بازی: </td>
                    <td> {{ $comment ->game->name }} </td>
                </tr>
                <tr>
                    <td> وضعیت: </td>
                    @if($comment -> show == 1)
                        <td> منتشر شده </td>
                    @else
                        <td> منتشر نشده </td>
                    @endif
                </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center;margin-top: 5px;">
            {{--<a href="{{ route('users.edit',$user -> id) }}" class="btn btn-dark" role="button">ویرایش کاربر</a>--}}


            <!-- Button delete comment modal -->
            <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id06').style.display='flex'" style="width:auto;">حذف کامنت</a>

        @if($comment -> show == 0)
            <!-- Button  send comment modal -->
            <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id07').style.display='flex'" style="width:auto;">انتشار دیدگاه</a>
            <a href="{{ route('comments.index',$comment->id) }}" class="btn bt-profile">{{ __('بازگشت') }}</a>
        @elseif($comment->show == 1)
            <!-- Button  not send comment modal -->
            <a class="btn bt-profile" data-toggle="modal"  href="#"  onclick="document.getElementById('id08').style.display='flex'" style="width:auto;">منتشر نکردن دیدگاه</a>
            <button type="button" class="btn bt-profile" data-toggle="modal" data-target="#unsendModal"></button>
                <a href="{{ route('comments.index') }}" class="btn bt-profile">{{ __('بازگشت') }}</a>
        @endif


            <!-- Delete Modal -->
                <div id="id06" class="modal container-fluid">
                    <form method="post" class="modal-content" style="height: fit-content;padding: 5px;" action="{{ route('comments.destroy',$comment->id) }}" aria-label="{{ __('deleteComment') }}">
                        {{method_field('delete')}}
                        @csrf
                        <div class="container-fluid per  del-style" style="    width: 100%;margin-top: 0;height: 100px;">
                            <span onclick="document.getElementById('id06').style.display='none'" class="close" title="بستن">&times;</span>
                            <p>آیا نسبت به حذف این کامنت مطمئن هستید.</p>
                            <input class="btn btn-danger" type="submit" value="حذف کامنت">
                        </div>
                    </form>
                </div>

                <!-- send Modal -->
                <div id="id07" class="modal container-fluid">
                    <form method="post"  class="modal-content" style="height: fit-content;padding: 5px" action="{{ route('comments.send',$comment->id) }}" aria-label="{{ __('sendComment') }}">
                        {{method_field('put')}}
                        @csrf
                        <div class="container-fluid per  del-style" style="    width: 100%;margin-top: 0;height: 100px;">
                            <span onclick="document.getElementById('id07').style.display='none'" class="close" title="بستن">&times;</span>
                            <p>آیا نسبت به انتشار این کامنت مطمئن هستید؟</p>
                            <input class="btn btn-danger" type="submit" value="انتشار کامنت">
                        </div>
                    </form>
                </div>
            <!-- unsend Modal -->
                <div id="id08" class="modal container-fluid">
                    <form method="post" class="modal-content" style="height: fit-content;padding: 5px;" action="{{ route('comments.unsend',$comment->id) }}" aria-label="{{ __('unsendComment') }}">
                        {{method_field('put')}}
                        @csrf
                        <div class="container-fluid per  del-style" style="    width: 100%;margin-top: 0;height: 100px;">
                            <span onclick="document.getElementById('id08').style.display='none'" class="close" title="بستن">&times;</span>
                            <p>آیا نسبت به منتشر نکردن این کامنت مطمئن هستید؟</p>
                            <input class="btn btn-dark" type="submit" value="منتشر نکردن">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection