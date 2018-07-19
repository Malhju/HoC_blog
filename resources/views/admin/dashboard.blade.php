
@extends('layouts.app')
@section('content')
    <h1>Bonjour {{ Auth::user()->name}} ! </h1>
    <a href="{{ route('posts.index') }}">Articles</a> <br>
    <a href="{{ route('categories.index') }}">Catégories</a> <br>
    <a href="{{ route('categories.create') }}">Créer une catégorie</a> <br>
    <a href="{{ route('posts.create') }}">Créer un article</a> <br>
    {{--<li><a href="{{ route() }}">Mes articles</a></li>--}}
@stop