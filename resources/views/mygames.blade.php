@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive" style="margin-top: 15px;">
            <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 50%;margin: auto;">
                <caption style="text-align: center">
                    <h3 style="color: #1b1e21">(( بازی‌های من ))</h3>
                </caption>
                <thead>
                <td class="text-center">شماره</td>
                <td class="text-center">نام بازی</td>
                </thead>
                <tbody>
                @foreach($games as $game)
                    <tr>
                        <td class="text-center">{{ $loop->index + 1 }}</td>
                        <td class="text-center">{{ $game->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center;">
            <a href="{{route('profile.show')}}" class="btn btn-dark">{{ __('بازگشت') }}</a>
        </div>
    </div>
@endsection