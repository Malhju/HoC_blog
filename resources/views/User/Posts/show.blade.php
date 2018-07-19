@extends('layouts.app')
@section('content')
    <h1>{{$Post->title}}</h1>
    <p>{{$Post->content}}</p> <br>
    <a href="{{ route('user.categories.index') }}">Retour aux catégories</a> <br>
    <a href="{{ route('home') }}">Accueil</a>
@stop