@extends('layouts.app')
@section('content')
    <h1 class="text-center"> Articles</h1>
    <a href="{{ route('posts.create') }}">Créer un article</a> <br>
    <nav>
        <ul>
        @foreach ($Posts as $Post)
            <li><a href="{{ route('posts.show', $Post->id) }}">{{$Post->title}}</a></li>
        @endforeach
        </ul>
    </nav>
    <a href="{{ route('dashboard') }}">Dashboard</a>
  
@stop