@extends('layouts.app')

@section('content')
<h1>This is Food detail Page. Please update food information</h1>

<form action="/foods/{{ $food->id }}" method="POST" class="mb-3">
    {{-- not work, because it related to CSRF - cross site reuest forgery --}}
    @csrf
    {{-- the key is generated at every session start
        Only apply to non-read routes
        If some hacker access to this site from his/her site
    --}}
  @method('PATCH')
  <div class="mb-3 ">
    <label for="foodId" class="form-label">Food ID</label>
    <input type="text" class="form-control" id="foodId" value="{{ $food->id }}" name="foodName" disabled placeholder="Enter food's name">
  </div>
   <div class="mb-3 ">
    <label for="categoryId" class="form-label">Category  ID</label>
    <input type="text" class="form-control" id="categoryId" value="{{ $food->category_id }}" name="categoryId" disabled placeholder="Enter food's name">
  </div>
   <div class="mb-3 ">
    <label for="categoryName" class="form-label">Food Category ID</label>
    <input type="text" class="form-control" id="categoryName" value="{{ $category->name }}" name="categoryName" disabled placeholder="Enter food's name">
  </div>
  <div class="mb-3 ">
    <label for="foodName" class="form-label">Food Name</label>
    <input type="text" class="form-control" id="foodName" value="{{ $food->name }}" name="foodName" disabled placeholder="Enter food's name">
  </div>
  <div class="mb-3 ">
    <label for="foodDescription" class="form-label">Description</label>
    <input type="text" class="form-control" id="foodDescription" value="{{ $food->description }}"  disabled name="foodDescription" placeholder="Enter food's description">
  </div>
  <div class="mb-3 ">
    <label for="foodCount" class="form-label">Count </label>
    <input type="text" class="form-control" id="foodCount"  value="{{ $food->count }}"  disabled name="foodCount" placeholder="Enter food's count">
  </div>
  <img src="{{ asset('images/'.$food->image_path) }}">
</form>
@endsection