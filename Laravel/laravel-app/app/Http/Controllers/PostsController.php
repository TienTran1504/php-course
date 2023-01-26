<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index(){
        // C1: $posts = DB::select("SELECT * FROM posts WHERE id=?;",[2]);
        // C2: $posts = DB::select("SELECT * FROM posts WHERE id=:id;",[
        //     'id'=>3,
        // ]);
        //$posts = DB::table('posts')->where('id', 2)->select('title')->get();

        //$posts = DB::table('posts')->where('id', 2)->get(); lấy tất cả
        $posts = DB::table('posts')
        ->whereBetween('id',[1,3]) // trong khoảng 1 đến 3
        ->whereNotNull('body') // kiểm tra body not null
        ->where('created_at',">", now()->subDay())
        ->orWhere('id','>',0)
        ->orderBy('id','DESC')
        ->latest()// cho theo cuối cùng hay first hay orldest
       // ->find(3) // find by id vd là theo id = 3
        /*->count() đếm
        ->max('id') tương tự tìm min id
        ->sum('id')
        ->avg('id)
        ->insert([
            'title'=>'abc',
            'body' =>'new post',
        ])

        ->where('id','=',5)
        ->update([
            'title'=>'abcd',
            'body' =>'update post',
        ])
        hay ->delete()
        */
        //->select('title')
        ->get();
        
        dd($posts);
        return view('posts.index');
    }
}