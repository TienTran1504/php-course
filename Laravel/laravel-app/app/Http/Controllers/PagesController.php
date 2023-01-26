<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about()
    {
        $name = 'Tien';
        $names = array('Tien 1', 'tien 2', ' tien 3');
        return view('about', compact('name','names'));
    }
}