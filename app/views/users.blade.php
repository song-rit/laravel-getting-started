@extends('layout')

@section('content')

{{-- Hello Users!! --}}

{{-- @foreach($users as $user) 
    <p>{{$user->name}}</p>
@endForeach --}}

{{-- {{$users->name}} --}}

 @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@stop