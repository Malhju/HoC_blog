@extends('layouts.app')
@section('content')
    <h1>{{$Post->title}}</h1>
    <p>{{$Post->content}}</p>
    <p><em>créé par {{$Post->user->name}} le {{$Post->created_at}}</em></p> <br>
    <a href="{{ route('user.categories.show', $Post->category_id) }}">Retour aux articles de la catégorie {{$Post->category->name}}</a> <br>
    <a href="{{ route('user.categories.index') }}">Retour aux catégories</a> <br>
    <a href="{{ route('home') }}">Accueil</a>
@stop