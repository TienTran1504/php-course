<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
        public function index(User $user) // hay \App\Models\User
    {
        return view('profiles.index',compact('user'));
    }

    public function edit(User $user){
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
            'image'=>'',
        ]);
        
        if(request('image')){
            $imagePath = request('image')->store('uploads','public'); // move to storage/app/public/upload
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(120,120);// take our image -> wrap around  intervention class -> fit to 250,250
            $image->save();
            $imageArray = ['image' => $imagePath];
            
        }

        auth()->user()->profile()->update(array_merge(
            $data,
            $imageArray ?? [],
        ));
        
        return redirect("/profile/{$user->id}");
    }
}