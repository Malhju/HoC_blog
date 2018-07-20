@extends('layouts.app')
@section('content')
    <h1>Créer une catégorie</h1>
    {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}

    {!! Form::label("title", "Nom de la categorie") !!}
    {!! Form::text("title", null)!!}
    <br/>
    {!! Form::submit("Créer catégorie") !!}
    {!! Form::close() !!}
    <nav>
    <h3>toutes les catégories crées</h3>
        <ul>
            @foreach ($Categories as $categorie)
                <li><a href="{{ route('categories.show', $categorie->id ) }}">{{ $categorie->name }}</a></li>
            @endforeach
        </ul>
    </nav>
    <a href="{{ route('dashboard') }}">Dashboard</a>
@stop

