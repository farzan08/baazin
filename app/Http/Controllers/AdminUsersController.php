<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{

    // show all active users
    public function index()
    {
        $users=User::where('trash',0)->orderBy('id', 'desc')->paginate(5);
        return view('users',compact('users'));

    }

    // show all users in the trash
    public function trash()
    {
        $users=User::where('trash',1)->orderBy('id', 'desc')->paginate(5);
        return view('trashUsers',compact('users'));
    }

    // show create form
    public function create()
    {
        return view('createUser');
    }

    // create new user in users table
    public function store(Request $request)
    {
       $this -> validate($request,[
            'name' => 'required|string|alpha|min:3|max:20',
            'family' => 'required|string|alpha|min:3|max:20',
            'username' => 'required|string|alpha_dash|min:3|max:20|unique:users',
            'cellphone' => 'required|string|digits:11|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'required' => 'اخطار:این فیلد ضروری است',
            'max' => 'اخطار:ماکسیمم تعداد کاراکتر مجاز ۲۰ می باشد.',
            'name.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'family.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'username.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۳ می‌باشد.',
            'password.min' => 'اخطار:مینیموم تعداد کاراکتر مجاز ۸ می‌باشد.',
            'cellphone.digits' => 'اخطار:شماره تلفن همراه شامل ۱۱ عدد می باشد!',
            'unique' => 'اخطار:داده از قبل موجود می باشد.',
            'confirmed' => 'اخطار:عدم مطابقت رمز عبور و تکرار آن',
            'alpha_dash'=>'اخطار:نام کاربری باید فقط شامل حروف و اعداد و ـ باشد.',
            'alpha'=>'اخطار:نام و نام خانوادگی باید فقط شامل حروف  باشد،بدون فاصله!',
            'confirmed'=>'اخطار:عدم مطابقت رمز عبور با تکرار آن',
        ]);
        $user=new User();
        $user -> name = $request -> name;
        $user -> family = $request -> family;
        $user -> username = $request -> username;
        $user -> cellphone = $request -> cellphone;
        $user -> password = Hash::make($request -> password);

        $user -> save();
        /*return view('user',compact('user'));*/
        return redirect()->route('users.index')->with('success','کاربر جدید با موفقیت ایجاد شد.');
    }

    // show user information
    public function show(User $user)
    {
//        $user=User::find($id);
        return view('user',compact('user'));
    }

    // show edit form
    public function edit($id)
    {
        $user = User::find($id);
        return view('editUser',compact('user'));
    }

    // update user information from edit form in users table
    public function update(Request $request, $id)
    {
        $this -> validate($request,[
            'name' => 'required|string|alpha|min:3|max:20',
            'family' => 'required|string|alpha|min:3|max:20',
            'username' => ['required','string','alpha_dash','min:3','max:20',\Illuminate\Validation\Rule::unique('users')->ignore($id)],
            'cellphone' => ['required','string','digits:11',\Illuminate\Validation\Rule::unique('users')->ignore($id)],
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

        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> family = $request -> family;
        $user -> username = $request -> username;
        $user -> cellphone = $request -> cellphone;
        $user -> save();


       /* return view('user',compact('user'));*/
        return redirect()->back()->with('success','ویرایش کاربر  با موفقیت انجام گرفت.');
    }

    // move user to trash
    public function moveToTrash($id)
    {
        $user = User::find($id);
        $user -> trash = 1;

        $user -> save();
        return redirect()->back()->with('success','کاربر به زباله دان انتقال داده شد.');
    }

    // replace user from trash
    public function replaceFromTrash($id)
    {
        $user = User::find($id);
        $user -> trash = 0;

        $user -> save();
        return redirect()->back()->with('success','کاربر از زباله دان بازگردانده شد.');
    }

    // delete user from users table
    public function destroy($id)
    {
        User::find($id)->delete();
        /*return view('users');*/
        return redirect()->route('users.index')->with('success','کاربر با موفقیت حذف گردید.');
    }

    public function games(User $user)
    {
        return view('usergames', ['user' => $user]);
    }

    public function showgames($id)
    {
        $games=Game::paginate(10);
        $user = User::find($id);
        return view('adminaddgame', compact ('games','user'));
    }
    public function addgame(Request $request, User $user)
    {
        $game = Game::find($request->game_id);

        $user->games()->save($game);
/*
        $user->games()->create([
            'user_id'=>$request->user_id,
            'game_id'=>$request-> game_id
        ]);*/
        return redirect()->back()->with('success','بازی مورد نظر با موفقیت اضافه شد.');
    }

}
