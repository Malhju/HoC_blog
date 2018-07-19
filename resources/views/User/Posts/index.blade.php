@extends('layouts.app')
@section('content')

    <ul>
    @foreach ($Posts as $Post)
        <li><a href="{{ route('user.posts.show', $Post->id) }}">{{$Post->title}}</a></li>
    @endforeach
    </ul>
@stop