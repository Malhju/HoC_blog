@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{$Post->title}}</h1>
    <figure>
        <div class="img-crop">
            {{ Html::image($Post->photos()->first() ? $Post->photos()->first()->file : '','text alternatif') }}
        </div>
        <figcaption>
            <p>
                 {{$Post->content}}

            </p>
        </figcaption>
    </figure>

    <p><em>créé par {{$Post->user->name}} le {{$Post->created_at}}</em></p> <br>
    <a href="{{ route('user.categories.show', $Post->category_id) }}">Retour aux articles de la catégorie {{$Post->category->name}}</a> <br>
    <a href="{{ route('user.categories.index') }}">Retour aux catégories</a> <br>
    <a href="{{ route('home') }}">Accueil</a>
@stop