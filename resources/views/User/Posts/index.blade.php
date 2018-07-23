@extends('layouts.app')
@section('content')


    <h1 class="text-center">Tous les articles</h1>
    <div class="posts-list row">
   @foreach ($Posts as $Post)
        <a href="{{ route('user.posts.show', $Post->id) }}" class="col-sm-3">
            <figure class="figure text-center">
                <div class="img-crop">
                {{ Html::image($Post->photos()->first() ? $Post->photos()->first()->file : '','text alternatif',array('class'=>'figure-img img-fluid rounded')) }}
                </div>
                <figcaption class="figure-caption">
                    <h3>{{$Post->title}}</h3>
                    <span><b>nom_categorie1</b></span>
                </figcaption>
            </figure>
        </a>
    @endforeach
    </div>
@stop