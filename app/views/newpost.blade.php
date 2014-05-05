@extends('layout')
@include('admin_nav')
@section('body-section')
    {{Form::open(array('action' => 'IndexController@postNew', 'method' => 'post'))}}
                {{ Form::label('title', 'Title :') }}
                {{ Form::text('title', '',array('class' => 'form-control')) }}

                {{ Form::label('author', 'Author :') }}
                {{ Form::text('author', '',array('class' => 'form-control')) }}

                {{ Form::label('body_content', 'Content:') }}
                {{ Form::textarea('body_content','', array('class' => 'form-control')) }}
                <hr>
            	{{ Form::submit('Submit', array('class' => 'btn')) }}

    {{ Form::close() }}
@stop