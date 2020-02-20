<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use phplusir\smsir\Smsir;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = '/register/verification';


    public function __construct()
    {
        $this->middleware(['guest','arabicnumber']);
    }
    // validation for register
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|alpha|min:3|max:20',
            'family' => 'required|string|alpha|min:3|max:20',
            'username' => 'required|string|alpha_dash|min:3|max:20|unique:users',
            'cellphone' => 'required|string|digits:11|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'required' => 'اخطار:این فیلد ضروری است',
            'max' => 'اخطار:ماکسیمم تعداد کاراکتر مجاز ۲۰ می باشد.',
            'cellphone.digits' => 'اخطار:شماره تلفن همراه شامل ۱۱ عدد می باشد!',
            'password.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۸ می باشد.',
            'name.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می باشد.',
            'family.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می باشد.',
            'username.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می باشد.',
            'unique'=>'اخطار:داده از قبل موجود می باشد.',
            'alpha_dash'=>'اخطار:نام کاربری باید فقط شامل حروف و اعداد و ـ باشد.',
            'alpha'=>'اخطار:نام و نام خانوادگی باید فقط شامل حروف  باشد.',
            'confirmed'=>'اخطار:عدم مطابقت رمز عبور با تکرار آن',
            ]);
       /* //sms
        dd(1);
        return view('verificationSms',compact($data));*/
    }
    // create new user and add to users table
    protected function create(array $data,$verifycode)
    {

        User::create([
            'name' => $data['name'],
            'family' => $data['family'],
            'username' => $data['username'],
            'cellphone' => $data['cellphone'],
            'password' => Hash::make($data['password']),
            'role' => false,
            'verify'=>false,
            'verifyCode'=>$verifycode,
        ]);

        /*return redirect()->route('panel')->with('success','شما با موفقیت ثبت نام شدید.');*/
    }

    public function register(Request $request)
    {
        $verifycode=rand(10000000,99999999);
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all(),$verifycode)));

        Smsir::sendVerification($verifycode,$request->cellphone);

        return redirect()->route('verification');
    }
    public function verification()
    {
        return view('verificationSms');
    }
    public function verificationCheck(Request $request)
    {
        $this->validate($request,[
            'sms' => 'required|digits:8'
        ],[
            'required'=> 'وارد کردن کد پیامکی الزامی میباشد.',
            'digits'=> 'تعداد اعداد وارد شده الزاما ۸ میباشد.'
        ]);

        $user=User::where('verifyCode', $request->sms)->first();
        if ($user!=null) {
            if ($user->verify==1){
                return redirect()->route('/')->with('warning','شما از قبل ثبت نام شده اید.');
            }else {
                $user->verify = 1;
                $user->verifyCode=null;
                $user->save();
                return redirect()->to('/')->with('success', 'عملیات ثبت نام شما با موفقیت انجام گردید.میتوانید وارد سایت شوید.');
            }
        }else{
            return redirect()->route('verification')->with('warning','کد وارد شده اشتباه میباشد.');
        }
    }
}
