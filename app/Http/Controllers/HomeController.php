<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        //
    }
    // show panel
    public function index()
    {
        $games=Game::all();
        return view('homePage',compact('games'));
    }
    // show dashbord
    public function dashboard()
    {
        return view('dashboard');
    }


}
