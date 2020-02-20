<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return redirect('/')->with('warning','اعلانیه:کاربر عزیز لطفا ابتدا وارد سایت شوید.');
    }
    protected $redirectTo = '/panel';


    public function __construct()
    {
        $this -> middleware('guest') -> except('logout');
    }


    public function username()
    {
        return 'username';
    }
    /*// validation for login
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ],[
            'required' => 'اخطار:این فیلد ضروری است'
        ]);
    }*/

}
