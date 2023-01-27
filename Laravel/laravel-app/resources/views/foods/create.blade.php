@extends('layouts.app')

@section('content')
<h1>This is Food Create Page. Please enter food information</h1>

<form action="/foods" method="POST" class="mb-3" enctype ="multipart/form-data">

    {{-- not work, because it related to CSRF - cross site reuest forgery --}}
    @csrf
    {{-- the key is generated at every session start
        Only apply to non-read routes
        If some hacker access to this site from his/her site
    --}}

  <div class="mb-3 form-group">
    <label for="name" class="form-label">Food Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter food's name">
  </div>
  <div class="mb-3 form-group">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter food's description">
  </div>
  <div class="mb-3 form-group">
    <label for="count" class="form-label">Count </label>
    <input type="text" class="form-control" id="count" name="count" placeholder="Enter food's count">
  </div>
  <select name="category_id" class="form-select" aria-label="Default select example">
    @foreach ($categories as $category)
        <option value ="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  <div class="mb-3 form-group">
    <label for="image" class="form-label">Food Image</label>
    <input type="file" class="form-control" id="image" name="image"  placeholder="Enter food's image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
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