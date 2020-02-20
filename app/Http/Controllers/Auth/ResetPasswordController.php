<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    protected $redirectTo = '/panel';

    public function __construct()
    {
        $this -> middleware('guest');
    }

    /*public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset') -> with(
            ['token' => $token, 'cellphone' => $request -> cellphone]
        );
    }*/


    protected function rules()
    {
        return [
            'token' => 'required',
            'cellphone' => 'required|digits:11',
            'password' => 'required|confirmed|min:8',
        ];
    }

    /*protected function credentials(Request $request)
    {
        return $request -> only(
            'cellphone', 'password', 'password_confirmation', 'token'
        );
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect() -> back()
            -> withInput($request -> only('cellphone'))
            -> withErrors(['cellphone' => trans($response)]);
    }*/
}
