@extends('layouts.app')
@section('content')
    <h1>Créer une catégorie</h1>
    {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}

    {!! Form::label("title", "Nom de la categorie") !!}
    {!! Form::text("title", null)!!}
    <br/>
    {!! Form::submit("Create categorie") !!}
    {!! Form::close() !!}
    <a href="{{ route('dashboard') }}">Dashboard</a>
@stop

