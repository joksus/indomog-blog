@extends('layout')

@section('content')
<section class="container">
 <table class="table">
    <tr>
       <th>ID</th>
       <th>Title</th>
       <th>Author</th>
       <th>Content</th>
    </tr>
    @foreach($postdata as $post)
      <tr>
         <td>{{ $post->id }}</td>
         <td>{{ $post->title }}</td>
         <td>{{ $post->author }}</td>
         <td>{{ $post->body_content }}</td>
      </tr>
    @endforeach
 </table>
</section>
@stop