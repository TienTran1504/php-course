<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth'); // thêm vào để khi chưa login sẽ direct đến login page
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
        auth()->user()->posts()->create($data);
        dd(request()->all());
    }
}