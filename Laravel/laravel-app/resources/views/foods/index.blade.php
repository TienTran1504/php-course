@extends('layouts.app')

@section('content')
<h1>This is Foods Page</h1>
<a class="btn btn-primary" href="/foods/create" role="button">
 Add a new Food
</a>
@foreach ($foods as $food)
    <h3>{{ $food->name }}</h3>
    <h3>{{ $food->description }}</h3>
    <h3>{{ $food->count }}</h3>
    <div class="d-flex">
        <a href ="/foods/{{ $food->id }}/edit" role="button" class="btn btn-primary" style="margin-right:8px;">Edit Food {{ $food->name }}</a>
        <form action="/foods/{{ $food->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Food</button>
        </form>
    </div>
@endforeach
@endsection