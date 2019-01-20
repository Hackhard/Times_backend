<!--The problem is here!!-->
@extends('layouts.app')
@section('content')
<a href="/newapp/public/posts/{{$post->id}}/brat/" class="btn btn default">Go Back</a>
    <div class="well"><h2><b>{{$post->title}}</b></h2></div>
    <div class="well"><h4>{{$post->description}}</h4><br>
    {{$post->body}}</div>
    <a href="/newapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
@endsection
