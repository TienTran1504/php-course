<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    //
    public function index(){

        $foods = Food::all(); // tìm ra tất cả các food;
        // dd($foods);
        // $foods = Food::where('name', '=', 'Maria Swaniawski')->get();
        // $foods = Food::where('name', '=', 'Maria Swaniawski')->firstOrFail();
        return view('foods.index',[
            'foods' => $foods,
        ]);

    }
    public function store(Request $request){
        // C1:
        // $food = new Food();
        // $food->name = $request->input('foodName');
        // $food->description = $request->input('foodDescription');
        // $food->count = $request->input('foodCount');
        // $food->save();

        $food = Food::create([
            'name' => $request->input('foodName'),
            'count' => $request->input('foodCount'),
            'description' => $request->input('foodDescription')
        ]);
        $food->save();
        return redirect('/foods');
    }
    public function create(){

        return view('foods.create');
    }
    public function show($id){
        
    }
    public function update(Request $request,$id){
        $food = Food::where('id', $id)->update([
            'name' => $request->input('foodName'),
            'count' => $request->input('foodCount'),
            'description' => $request->input('foodDescription')
        ]);
        return redirect('/foods');
    }
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
    public function edit($id){
        $food = Food::find($id)->first();
        
        return view('foods.edit',compact('food'));
    }
}