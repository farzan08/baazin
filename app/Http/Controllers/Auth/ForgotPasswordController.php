<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{


    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function cellphone(Request $request)
    {
        $this->validate($request, ['cellphone' => 'required|digits:11'], [
            'required' => 'اخطار: این فیلد ضروری است!',
            'digits' => 'اخطار: شماره ی همراه باید شامل ۱۱ رقم باشد!'
        ]);

        $user = User::where('cellphone', $request->cellphone);
        return view('auth.passwords.reset', compact($user));

    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.cellphone');
    }


}
