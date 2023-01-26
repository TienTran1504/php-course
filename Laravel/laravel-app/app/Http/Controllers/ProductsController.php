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
        print_r(route('products'));
        return view('products.index', [
            'myphone'=>$myphone,
            'title'=>'hello',
        ]);

    }
    public function about(){
        return "This is about page";
    }

    public function detail($productName, $id){
        return "product's id = " . $id. ", product's name: " . $productName; // . là để nối sâu chuỗi
    }


    
}