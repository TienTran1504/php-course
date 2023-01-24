@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="image" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle"
                            style="max-width:50px">
                    </div>
                    <div class="m-3">
                        <div style="font-weight:bold;">
                            <a href="/profile/{{$post->user->id}}" style="text-decoration:none">
                                <span class="text-dark">
                                    {{$post->user->username}}
                                </span>
                            </a>
                            <a style="padding-left: 4px; text-decoration:none;" href="#">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

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
</div>
@endsection