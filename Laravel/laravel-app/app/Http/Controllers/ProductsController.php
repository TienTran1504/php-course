<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){

        $title = 'Laravel Course';
        // return view('products.index',compact('title'));
        $name = "Tran Dung Tien";
        //return view('products.index')->with('Name',$name); // with method can only send 1 parameter
        
        //send an associative array
        $myphone = [
            'name'=>'ip 14',
            'year'=>'2022',
            'isfavorite'=>true,
        ];
        // return view('products.index', compact('myphone'));
        return view('products.index', [
            'myphone'=>$myphone,
            'title'=>'hello',
        ]);

    }
    public function about(){
        return "This is about page";
    }

    public function detail($productName){
        //return "product's id = " . $id; // . là để nối sâu chuỗi
        $phones = [
            'iphones15' => 'iphone 15',
            'samsung' => 'samsung',
        ];
        return view('products.index', [
            'products'=>$phones[$productName] ?? 'unknown product',
        ]);
    }
    
}