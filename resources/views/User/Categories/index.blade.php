@extends('layouts.app')
@section('content')
    <h1 class="text-center">Categories</h1>
    <nav>
    <ul>
    <!-- quand tu es dans le controller de catégorie "CategoriesController" on a la variable $Categories qui recupere l'objet Category    -->
        @foreach ($Categories as $categorie)
            <li><a href="{{ route('user.categories.show', $categorie->id ) }}">{{ $categorie->name }}</a></li>
        @endforeach
    </ul>
    </nav>
@stop