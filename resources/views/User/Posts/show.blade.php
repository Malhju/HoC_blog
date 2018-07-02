@extends('layouts.app')
@section('content')
    <h1>{{$Post->title}}</h1>
    <p>{{$Post->content}}</p>
    <p>
     <a href="{{route('posts.index')}}">Retour</a>
    </p>
    <ul>
        @foreach ($Comments as $Comment)
            <li>{{$Comment->content}}</li>
        @endforeach
    </ul>
@stop