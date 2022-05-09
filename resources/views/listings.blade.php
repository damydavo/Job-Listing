@extends('layout')

@section('content')
<h1>{{ $heading }}</h1>

@if (count($listings) == 0)
    <p>No listing was found</p>
@endif

@foreach ($listings as $list) 
    <h2><a href="/listing/{{ $list['id'] }}">{{ $list['title'] }}</a></h2>
    <p>{{ $list['description'] }}</p>


 @endforeach
@endsection

<div class="lg:grid lg:grid-cols-2 ">
    <div class="bg-gray-5 border bor"></div>

</div>