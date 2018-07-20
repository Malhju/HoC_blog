@extends('layouts.app')
@section('content')
    <h1>Créer un article</h1>
    
    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store']) !!}
        {!! Form::label("title", "Title") !!}
        {!! Form::text("title", null)!!}
        <br/>
        {!! Form::label("content", "Content") !!}
        {!! Form::textarea("content", null) !!}
        <br/>
        {!! Form::label("photo_id", "Entrez un numéro pour l'id de la photo header") !!}
        {{--{!! Form::file("photo_id", null) !!}--}}
        {!! Form::text("photo_id",null) !!}
        <br/>
        {!! Form::label("category_id", "choisir une catergorie") !!}
        {!! Form::text("category_id", null) !!}
        <br/>

    {!! Form::label("is_active", "Activate Post ?") !!}
        {!! Form::select("is_active", ["0" => "Oui", "1" => "Non"], null) !!}
        <br/>
        {!! Form::submit("Create post") !!}
    {!! Form::close() !!}

    
    
    <a href="{{ route('dashboard') }}">Dashboard</a>
@stop

