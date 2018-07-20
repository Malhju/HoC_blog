@extends('layouts.app')
@section('content')
    <h1 class="text-center">Bienvenue sur le blog House of Code !</h1> <hr>
    <a href="{{ route('user.categories.index') }}">Categories</a> <hr>
    <a href="{{ route('user.posts.index') }}">Articles</a>
@stop