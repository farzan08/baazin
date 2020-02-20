<?php

namespace App\Http\Controllers;

use App\Rules\passwordMatched;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use function Sodium\crypto_box_publickey_from_secretkey;


class UserController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['auth','ActiveUser','checkVerify']);
    }
    public function panel()
    {
        $games=User::find(Auth::user()->id)->games;
        return view('panel',compact('games'));
    }

    // show the user information
    public function show()
    {
        $user = Auth::user();
       return view('profile',compact('user'));
    }
    // show edit form
    public function edit()
    {
        $user = Auth::user();
        return view('editProfile',compact('user'));
    }
    
    // update user information from edit form in the users table
    public function update(Request $request)
    {

        trim($request->name,"‌");
        trim($request->family,"‌");
        trim($request->username,"‌");
        trim($request->cellphone,"‌");
        trim($request->password," ");
        $this -> validate($request,[
            'name' => 'required|string|alpha|min:3|max:20',
            'family' => 'required|string|alpha|min:3|max:20',
            'username' => ['required','string','alpha_dash','min:3','max:20',Rule::unique('users')->ignore(Auth::user()->id)],
            'cellphone' => ['required','string','digits:11',Rule::unique('users')->ignore(Auth::user()->id)],

            'newPassword' => 'nullable|string|min:8|confirmed',
        ],[
            'required' => 'اخطار:این فیلد ضروری است',
            'max' => 'اخطار:ماکسیمم تعداد کاراکتر مجاز ۲۰ می باشد.',
            'name.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'family.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'username.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'cellphone.digits' => 'اخطار:شماره تلفن همراه شامل 11 عدد می باشد!',
            'unique' => 'اخطار:داده از قبل موجود می باشد.',
            'alpha_dash'=>'اخطار:نام کاربری باید فقط شامل حروف و اعداد و ـ باشد.',
            'alpha'=>'اخطار:نام و نام خانوادگی باید فقط شامل حروف  باشد،بدون فاصله!',
        ]);

        $user = Auth::user();
        $user -> name = $request -> name;
        $user -> family = $request -> family;
        $user -> username = $request -> username;
        $user -> cellphone = $request -> cellphone;
        if (!(empty($request -> newPassword))){
            $user -> password = Hash::make($request -> newPassword);
        }
        $user -> save();
        return redirect()->back()->with('success','اطلاعات پروفایل شما با موفقیت بروزرسانی شد.');
//        return redirect('profile')->withInput($user)->with('status','موفقیت');
    }
    //delete user from table
    public function destroy(Request $request)
    {
        $this -> validate($request,[
            'password' => 'required',
        ],[
            'required'=> 'وارد کردن رمز عبور الزامی میباشد.'
        ]);
        // check password
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            // passwords match
            $user->delete();
            return redirect()->to('homePage')->with('success','عملیات حذف حساب کاربری با موفقیت انجام گرفت.');
        }else{
            return  redirect()->back()->with('warning','رمز وارد شده اشتباه می باشد.و عملیات ناموفق بود');
        }
    }
    public function games()
    {
        $games=User::find(Auth::user()->id)->games;
        return view('mygames',compact('games'));
    }
}
