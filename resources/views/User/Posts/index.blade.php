@extends('layouts.app')
@section('content')


    <h1 class="text-center">Tous les articles</h1>
    <div class="row">
   @foreach ($Posts as $Post)
        <a href="{{ route('user.posts.show', $Post->id) }}" class="col-sm-3">
            <figure class="figure">
                {{ Html::image($Post->photos()->first() ? $Post->photos()->first()->file : '','text alternatif',array('class'=>'figure-img img-fluid rounded')) }}
                <h3>{{$Post->title}}</h3>


                <img src="" class="figure-img img-fluid rounded">


                <figcaption class="figure-caption"></figcaption>
            </figure>
        </a>
    @endforeach
    </div>
@stop