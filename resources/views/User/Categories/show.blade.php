@extends('layouts.app')
@section('content')
    <h1>Articles de la catégorie {{ $Category->name }}</h1>

    <ul>
    <!--  $Category->posts : chercher methode posts() dans le Model Category.php    -->
        
        @foreach ($Category->posts as $post)

            <li><a href="{{ route('user.posts.show', $post->id ) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('user.categories.index') }}">Retour aux catégories</a> <br>

@stop