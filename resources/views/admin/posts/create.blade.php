@extends('layouts.app')
@section('content')
    <h1>Créer un article</h1>
    
    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files'=>'true']) !!}
        {!! Form::label("title", "Title") !!}
        {!! Form::text("title", null)!!}
        <br/>
        {!! Form::label("content", "Content") !!}
        {!! Form::textarea("content", null) !!}
        <br/>
        {!! Form::label("photo", "Entrez un numéro pour l'id de la photo header") !!}
        
        {!! Form::file("photo", null) !!} 
        
        
        <br/>

        {!! Form::label("{category_id}", "choisir une catergorie") !!}
        {!! Form::select("category_id", $Categories) !!}
        <br/>

    {!! Form::label("is_active", "Activate Post ?") !!}
        {!! Form::select("is_active", ["0" => "Oui", "1" => "Non"], 1) !!}
        <br/>
        {!! Form::submit("Create post") !!}
    {!! Form::close() !!}

    <a href="{{ route('dashboard') }}">Dashboard</a>
@stop

