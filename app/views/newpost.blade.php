@extends('layout')
@include('admin_nav')
@section('body-section')
<div class='content'>
    {{Form::open(array('action' => 'IndexController@postNew', 'method' => 'post'))}}
                {{ Form::label('title', 'Title :') }} {{ $errors->first('title') }}
                {{ Form::text('title', '',array('class' => 'form-control')) }}

                {{ Form::label('body_content', 'Content:') }} {{ $errors->first('body_content') }}
                {{ Form::textarea('body_content','', array('class' => 'form-control')) }}
                <hr>
            	{{ Form::submit('Submit', array('class' => 'btn')) }}

    {{ Form::close() }}
</div>
@stop