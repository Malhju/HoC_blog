@extends('layouts.app')
@section('content')
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Créer une catégorie</a> <br>

    <ul>
        @foreach ($Categories as $categorie)
            <li><a href="{{ route('categories.show', $categorie->id ) }}">{{ $categorie->name }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('dashboard') }}">Dashboard</a>
@stop