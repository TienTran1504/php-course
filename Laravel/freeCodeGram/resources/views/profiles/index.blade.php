@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{$user->profile->profileImage()}}" alt="avatar" class="rounded-circle"
                style="height:120px; width:120px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center mb-3">
                    <div class="h4">{{$user->username}}</div>

                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}">
                        <follow-button />
                </div>

                @can('update',$user->profile)
                <a class="btn btn-primary" href="/p/create">Add New Post</a>
                @endcan

            </div>
            @can('update',$user->profile)
            <a class="btn btn-primary" href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="p-2" style="padding-left:0px !important;"><strong>{{$postCount}} </strong>posts
                </div>
                <div class="p-2"><strong>{{$followersCount}} </strong>followers</div>
                <div class="p-2"><strong>{{$followingCount}} </strong>following</div>
            </div>
            <div class="mt-4" style="font-weight:bold">
                {{$user->profile->title}}
            </div>
            <div>{{$user->profile->description}}
            </div>
            <div> <a href="#">{{$user->profile->url}}</a></div>

        </div>
    </div>

    <div class="row mt-4">
        @foreach($user->posts as $post)
        <div class="col-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" alt="img" class="mb-4">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection