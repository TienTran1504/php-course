@extends('layouts.app')

@section('content')
<h1>This is Food update Page. Please update food information</h1>

<form action="/foods/{{ $food->id }}" method="POST" class="mb-3">
    {{-- not work, because it related to CSRF - cross site reuest forgery --}}
    @csrf
    {{-- the key is generated at every session start
        Only apply to non-read routes
        If some hacker access to this site from his/her site
    --}}
  @method('PATCH')
  <div class="mb-3 ">
    <label for="foodName" class="form-label">Food Name</label>
    <input type="text" class="form-control" id="foodName" value="{{ $food->name }}" name="foodName" value placeholder="Enter food's name">
  </div>
  <div class="mb-3 ">
    <label for="foodDescription" class="form-label">Description</label>
    <input type="text" class="form-control" id="foodDescription" value="{{ $food->description }}"  name="foodDescription" placeholder="Enter food's description">
  </div>
  <div class="mb-3 ">
    <label for="foodCount" class="form-label">Count </label>
    <input type="text" class="form-control" id="foodCount"  value="{{ $food->count }}"  name="foodCount" placeholder="Enter food's count">
  </div>
  <button type="submit" class="btn btn-primary">Update Food</button>
</form>
@endsection