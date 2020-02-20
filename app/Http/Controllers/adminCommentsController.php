<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class adminCommentsController extends Controller
{
    // show unsent comment
    public function index()
    {
        $comments=Comment::where('show',0)->orderBy('id', 'desc')->paginate(5);
        return view('comments',compact('comments'));
    }

    // show a comment
    public function show($id)
    {
        $comment=Comment::find($id);
        return view('comment',compact('comment'));

    }

    //show sent comment
    public function sent()
    {
        $comments=Comment::where('show',1)->orderBy('id', 'desc')->paginate(5);
        return view('sentComments',compact('comments'));
    }

    // send comment
    public function send($id)
    {
        $comment = Comment::find($id);
        $comment -> show = 1;
        $comment -> save();
        return redirect()->back()->with('success','دیدگاه با موفقیت منتشر شد.');
    }

    // unsend comment
    public function unsend($id)
    {
        $comment = Comment::find($id);
        $comment -> show = 0;
        $comment -> save();
        return redirect()->back()->with('success','دیدگاه با موفقیت پنهان گردید.');
    }
    public function destroy($id)
    {
        Comment::find($id)->delete();
        /*return view('comments');*/
        return redirect()->route('comments.index')->with('success','دیدگاه با موفقیت حذف گردید.');
    }
}
