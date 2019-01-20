@extends('layouts.app')
@section('content')
    <h2>Create Posts</h2>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description','',['class'=> 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class'=> 'form-control', 'placeholder' => 'Body'])}}
    </div>
    <div class="form-group">
            {{ Form::file('c_image') }}
    </div>
    <div class="form-group">
            {{Form::select('dropdown', ['MH' => 'Monday Hues', 'SS' => 'Sunday Sports','PT' => 'Picture Thursday', 'FF' => 'Funny Fridays', 'BR' => 'Book Reviews', 'QoTD' => 'Quote of The Day'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection