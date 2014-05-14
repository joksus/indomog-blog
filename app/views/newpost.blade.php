@extends('layout')
@include('admin_nav')
@section('body-section')
<div class='content'>
    {{Form::open(array('action' => 'IndexController@postNew', 'method' => 'post'))}}
                {{ Form::label('title', 'Title :') }}
                {{ "<span class='label label-warning'>",$errors->first('title'),"</span>" }}
                {{ Form::text('title', '',array('class' => 'form-control')) }}

                {{ Form::label('body_content', 'Content:') }}
                {{ "<span class='label label-warning'>",$errors->first('body_content'),"</span>" }}
                {{ Form::textarea('body_content','', array('class' => 'form-control')) }}
                <hr>
            	{{ Form::submit('Submit', array('class' => 'btn')) }}

    {{ Form::close() }}
</div>
@stop