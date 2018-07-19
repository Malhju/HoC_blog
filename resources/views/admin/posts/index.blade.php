@extends('layouts.app')
@section('content')

    <h1> Articles</h1>
    <a href="{{ route('posts.create') }}">Créer un article</a> <br>
 
    <ul>
    @foreach ($Posts as $Post)
        <li><a href="{{ route('posts.show', $Post->id) }}">{{$Post->title}}</a></li>
    @endforeach
    </ul>
    <a href="{{ route('dashboard') }}">Dashboard</a>
  
@stop