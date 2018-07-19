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
        {!! Form::label("photo_id", "Télécharder une image d'perçu") !!}
        {!! Form::file("photo_id", null) !!}
        <br/>
        {!! Form::label("is_active", "Activate Post ?") !!}
        {!! Form::select("is_active", ["0" => "No", "1" => "Yes"], null) !!}
        <br/>
        {!! Form::submit("Create post") !!}
    {!! Form::close() !!}

    
    
    <a href="{{ route('dashboard') }}">Dashboard</a>
@stop

