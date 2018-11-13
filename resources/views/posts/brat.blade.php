
@extends('layouts.app')
@section('content')
    <h2>Posts:</h2>
    @if(count($posts)>1)
        @foreach($posts as $post)
            <div class="well">
                <h4>{{$post->id}})<strong>{{$post->title}}</strong></h4>
                <h5>{{$post->description}}</h5>
                <h6>{{$post->body}}</h6>
            <a class="btn btn-success btn-sm" href="brat/{{$post->id}}" role="button">Edit</a> <a class="btn btn-danger btn-sm" href="/register" role="button">Delete</a>
            </div>
        @endforeach
    @else
    <p>No posts</p>
    @endif
@endsection