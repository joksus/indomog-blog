@extends('layout')
@include('admin_nav')
@section('body-section')
<br>
<br>
{{Form::open(array('action'=>'PostControl@savePost','method'=>'post'))}}
	{{ Form::label('title', 'Title :') }}{{$errors->first('title')}}
    {{ Form::text('title', '',array('class' => 'form-control','placeholder'=>'Input title post')) }}

    {{ Form::label('author', 'Author :') }}{{$errors->first('author')}}
    {{ Form::text('author', '',array('class' => 'form-control','placeholder'=>'Input your username')) }}

    {{ Form::label('body_content', 'Content:') }}{{$errors->first('body_content')}}
    {{ Form::textarea('body_content','', array('class' => 'form-control','placeholder'=>'Input your Post')) }}
     <hr>
    {{ Form::submit('Submit', array('class' => 'btn')) }}

    {{ Form::close() }}
@stop