
@extends('layouts.app')
@section('content')
    <h2>Posts:</h2>
    @if(count($posts)>=1)
        @foreach($posts as $post)
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%;height:170px;" src="/newapp/storage/app/public/cover_images/{{$post->c_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4>{{$post->id}})<strong>{{$post->title}}</strong></h4>
                         <h5>{{$post->description}}</h5>
                         <h6>{{$post->body}}</h6>
                    
                
            <a class="btn btn-success btn-sm" href={{ url('/posts/'.$post->id.'/edit' )}} role="button">Edit</a> 
            <!--<a class="btn btn-danger btn-sm" href="/register" role="button">Delete</a>-->
            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=> 'POST','class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
        </div>
        </div>
        </div>
        @endforeach
    @else
    <p>No posts</p>
    @endif
@endsection