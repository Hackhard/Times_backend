@extends('layouts.app')
@section('content')
    <h2>Edit Posts</h2>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description',$post->description,['class'=> 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body',$post->body,['class'=> 'form-control', 'placeholder' => 'Body'])}}
    </div>
    <div class="form-group">
            {{ Form::file('image') }}
            {{ Form::open(array('url' => 'user/poster/upload_process', 'files' => true, 'method' => 'post')) }}
    </div>
    <div class="form-group">
            {{Form::select('dropdown', ['MH' => 'Monday Hues', 'SS' => 'Sunday Sports','PT' => 'Picture Thursday', 'FF' => 'Funny Fridays', 'BR' => 'Book Reviews', 'QoTD' => 'Quote of The Day'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection