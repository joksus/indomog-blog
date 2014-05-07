@extends('layout')
@include('admin_nav')
@section('body-section')
@section('body-section')
Username : {{ Auth::user()->username }} <br>
Email 	 : {{ Auth::user()->email }} <br>
Password : {{ Auth::user()->password }} <br>
@stop