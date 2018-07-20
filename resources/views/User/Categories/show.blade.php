@extends('layouts.app')
@section('content')
    <h1 class="text-center">Articles de la catégorie {{ $Category->name }}</h1>
    <nav>
        <ul>
        <!--  $Category->posts : chercher methode posts() dans le Model Category.php    -->

            @foreach ($Category->posts as $post)

                <li><a href="{{ route('user.posts.show', $post->id ) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </nav>
    <a href="{{ route('user.categories.index') }}">Retour aux catégories</a> <br>

@stop