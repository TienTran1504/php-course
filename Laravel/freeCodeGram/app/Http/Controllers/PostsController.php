<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth'); // thêm vào để khi chưa login sẽ direct đến login page
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
        // $posts=Post::whereIn('user_id',$users)->orderBy('created_at','DESC')->get();
        $posts=Post::whereIn('user_id',$users)->latest()->get();

        return view('posts.index',compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $data = request()->validate([
           'caption' => 'required', 
        //    'image' => 'required|image',
            'image' => ['required','image'],
        ]);
        
        $imagePath = request('image')->store('uploads','public'); // move to storage/app/public/upload
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(250,250);// take our image -> wrap around  intervention class -> fit to 250,250
        $image->save();
        
        auth()->user()->posts()->create([
            "caption"=> $data['caption'],
            'image'=>$imagePath,
        ]);
        return redirect('/profile/'. auth()->user()->id);
    }

    public function show(\App\Models\Post $post){
        return view('posts.show', compact('post')); // or use [] instead compact
    }
}