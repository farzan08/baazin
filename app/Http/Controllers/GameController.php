<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use App\User_games;
use App\UserGame;
use App\UserGames;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GameController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['auth','ActiveUser']);
    }

    public function index()
    {
        $games=Game::all();
        return view('games',compact('games'));
    }

    public function show($id)
    {
        $game=Game::find($id);
        return view('game',compact('game'));
    }

    public function start($name)
    {

        $games=User::find(Auth::user()->id)->games;
        $currentGame = Game::whereName($name)->first();
        if ($games->contains($currentGame)) {
             if($name=='crowds-master'){
                 return view('crowds-master');
             }elseif ($name=='loopy'){
                 return view('loopy');
             }elseif ($name=='ballot'){
                 return view('ballot');
             }
        }else {
            return redirect()->to('games')->with('warning', 'اخطار:هنوز بازی را خریداری نکرده‌اید!');
        }
    }
    public function storeComment(Request $request,$id)
    {
        $this -> validate($request,[
            'auther' => 'required|string|alpha_dash|min:3|max:30',
            'body' => 'required|string|min:3|max:500'
        ],[
            'required' => 'اخطار:این فیلد ضروری است',
            'max' => 'اخطار:ماکسیمم تعداد کاراکتر مجاز ۳۰ می باشد.',
            'body.max' => 'اخطار:ماکسیمم تعداد کاراکتر مجاز ۵۰۰ می باشد.',
            'min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'alpha_dash'=>'اخطار:نام نویسنده باید فقط شامل حروف و اعداد و ـ باشد.',
        ]);
        $game=Game::find($id);
        $game->comments()->create([
            'auther'=>$request->auther,
            'body'=>$request->body
        ]);
        $game->save();
        return redirect()->route('games.index')->with('success','با تشکر. وضعیت دیدگاه شما پس از بررسی مشخص می‌شود. ');
    }
}