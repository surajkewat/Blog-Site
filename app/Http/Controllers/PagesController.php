<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        foreach ($posts as $post){
            $user  = User::find($post->uid);
            $user_name = $user->name;
            $post["uname"] = $user_name;
        }
        return view('pages.index')->with('posts',$posts);
    }
    public function create()
    {
        return view('pages.create');
    }
    public function view()
    {   
        $id = Auth::id();
        $posts = Post::where('uid',$id)->orderBy('created_at', 'desc')->paginate(2);
        return view('pages.view')->with('posts',$posts);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function category($id)
    {
        $posts = Post::where('cat',$id)->paginate(2);
        foreach ($posts as $post){
            $user  = User::find($post->uid);
            $user_name = $user->name;
            $post["uname"] = $user_name;
        }
        return view('pages.index')->with('posts',$posts);
    }
    public function category2($id)
    {
        $posts = Post::where('cat',$id)->paginate(2);
        foreach ($posts as $post){
            $user  = User::find($post->uid);
            $user_name = $user->name;
            $post["uname"] = $user_name;
        }
        return view('pages.view')->with('posts',$posts);
    }
}
