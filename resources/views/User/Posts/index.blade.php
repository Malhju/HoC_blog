@extends ("layouts.app")
@section('content')
    <h1>Articles</h1>
    <ul>
        @foreach($Posts as $Post)
            <li><a href="{{route('posts.show', $Post->id)}}">{{$Post->title}}</a></li>
        @endforeach
    </ul>
@stop