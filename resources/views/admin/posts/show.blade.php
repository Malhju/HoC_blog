@extends('layouts.app')
@section('content')
    <h1>{{$Post->title}}</h1>
    <p>{{$Post->content}}</p>
    <p><em>créé par {{$Post->user->name}}</em></p> <br>
@stop
