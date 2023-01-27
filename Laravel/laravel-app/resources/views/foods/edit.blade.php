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
    <label for="name" class="form-label">Food Name</label>
    <input type="text" class="form-control" id="name" value="{{ $food->name }}" name="name" value placeholder="Enter food's name">
  </div>
  <div class="mb-3 ">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" value="{{ $food->description }}"  name="description" placeholder="Enter food's description">
  </div>
  <div class="mb-3 ">
    <label for="count" class="form-label">Count </label>
    <input type="text" class="form-control" id="count"  value="{{ $food->count }}"  name="count" placeholder="Enter food's count">
  </div>
  <select name="category_id" class="form-select" aria-label="Default select example">
    @foreach ($categories as $category)
        <option value ="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  <button type="submit" class="btn btn-primary">Update Food</button>
</form>
@if ($errors->any())
    <div class="row">
        @foreach ($errors->all() as $error)
        <p class="text-danger">
            {{ $error }}
        </p>
        @endforeach
    </div>
    
@endif
@endsection