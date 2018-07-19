@extends('layouts.app')
@section('content')
    <ul>
    <!--  $Category->posts : chercher methode posts() dans le Model Category.php    -->
        
        @foreach ($Category->posts as $post)

            <li><a href="{{ route('user.posts.show', $post->id ) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>


@stop