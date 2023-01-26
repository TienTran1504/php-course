@extends('layouts.app')

@section('content')
<h1> page controller</h1>
{{-- {{ print_r( URL('images/avatar.png')) }} --}}
{{-- <img src="{{ URL('images/avatar.png') }}" alt="avatar"> --}}
<img src="{{ asset('storage/avatar.png') }}" alt="avatar">
@endsection