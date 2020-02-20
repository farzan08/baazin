@extends('layouts.adminapp')

@section('content')
    <div class="container">
        <div class="table-responsive" style="margin-top: 15px;">
            <table class="table table-striped table-bordered  table-dark table-hover" style="max-width: 50%;margin: auto;">
                <caption style="text-align: center">
                    <h3 style="color: #1b1e21">(( بازی‌های کاربر ))</h3>
                </caption>
                <thead>
                    <td class="text-center">شماره</td>
                    <td class="text-center">نام بازی</td>
                    <td class="text-center">اضافه</td>
                </thead>
                <tbody>
                @php
                @endphp
                    @foreach($games as $game)
                        <tr>
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td class="text-center">{{ $game->name }}</td>
                            <td class="text-center">
                                <form action="{{route('users.addgame',$user->id)}}" method="post" aria-label="{{ __('add game') }}">
                                    @csrf
                                    <input type="hidden" name="game_id" value="{{$game->id}}">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn bt-profile">
                                                {{ __('اضافه کردن بازی') }}
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center;margin-top: 5px;">
            <a href="{{route('users.games',$user->id)}}" class="btn bt-profile">{{ __('بازگشت') }}</a>
        </div>
    </div>
@endsection