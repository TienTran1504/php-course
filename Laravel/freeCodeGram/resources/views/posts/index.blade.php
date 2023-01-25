@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" alt="image" class="w-100">
            </a>
        </div>
    </div>
    <div class="row mt-4 mb-2">
        <div class="col-6 offset-3">
            <div>

                <p>
                    <span style="font-weight:bold;">
                        <a href="/profile/{{$post->user->id}}" style="text-decoration:none">
                            <span class="text-dark">
                                {{$post->user->username}}
                            </span>
                        </a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection