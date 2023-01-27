<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    //
    public function index()
    {

        $foods = Food::all(); // tìm ra tất cả các food;
        // dd($foods);
        // $foods = Food::where('name', '=', 'Maria Swaniawski')->get();
        // $foods = Food::where('name', '=', 'Maria Swaniawski')->firstOrFail();
        return view('foods.index', [
            'foods' => $foods,
        ]);

    }
    public function store(Request $request)
    {

        // C1:
        // $food = new Food();
        // $food->name = $request->input('foodName');
        // $food->description = $request->input('foodDescription');
        // $food->count = $request->input('foodCount');
        // $food->save();

        //$request->file('image')->guessExtension(); // trả về jpg,png,...
        //$request->file('image')->getSize(); // kilobytes
        //$request->file('image')->getError();
        //$request->file('image')->isValid();
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'name' => 'required',
            'count' => 'required| integer | min:0 | max:1000',
            'description' => 'required',
            'category_id' => 'required',

        ]);

        // tạo mới tên image
        $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();

        //move to a folder
        $request->image->move(public_path('images'), $generatedImageName);

        // $request->validate([
        //     'name' => 'required | unique:food',
        //     // 'name' => new UpperCase,
        //     'description' => 'required',
        //     'count' => 'required| integer | min:0 | max:1000',
        //     'category_id' => 'required',
        // ]);


        //$request->validated();

        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        $food->save();
        return redirect('/foods');
    }
    public function create()
    {
        $categories = Category::all();
        return view('foods.create', compact('categories'));
    }
    public function show($id)
    {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        $food->category = $category;

        return view('foods.show', compact('food', 'category'));
    }
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validated();
        $food = Food::where('id', $id)->update([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect('/foods');
    }
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
    public function edit($id)
    {
        $food = Food::find($id)->first();
        $categories = Category::all();

        return view('foods.edit', compact('food', 'categories'));
    }
}