@extends('layouts.adminapp')

@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">مدیریت کامنت‌ها</div>
                    <div class="card-body">
                        <div class="table-responsive" style="margin-top: 15px;">
                            <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 100%;margin: auto;">
                                <caption style="text-align: center">
                                    <h3 style="color: #1b1e21">(( کامنت‌های منتشر شده ))</h3>
                                </caption>
                                <thead>
                                <td class="text-center">شماره</td>
                                <td class="text-center">نام نویسنده</td>
                                <td class="text-center">نام بازی</td>
                                <td class="text-center">نمایش دیدگاه</td>

                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td class="text-center">{{ $loop->index + 1 }}</td>
                                        <td class="text-center">{{ $comment->auther }}</td>
                                        <td class="text-center">{{ $comment->game->name }}</td>
                                        <td class="text-center"><a href="{{ route('comments.show',$comment->id) }}">مشاهده</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$comments->links()}}
                            <a href="{{ route('dashboard') }}" class="btn bt-profile">{{ __('بازگشت') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection