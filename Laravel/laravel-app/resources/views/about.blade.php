@extends('layouts.app')

@section('content')
<h1> About page</h1>
{{ $x = 20 }}
@if ($x<2)
    <h3> x is less than 2</h3> 
@elseif($x <10)
    <h3>x less than 10</h3>
@else
    <h3>All conditions are not match</h3>
@endif
{{--  --}}
{{-- @unless(empty($name))
    <h3> Name is not empty</h3>
@endunless --}}
{{-- @if (!empty($name))
    <h3> Name is not empty</h3>
@endif --}}f
@empty(!$name)
    <h3> Name is not empty</h3>
@endempty
@foreach ($names as $name)
    <h3>each name: {{ $name }}</h3>
@endforeach
@endsection
