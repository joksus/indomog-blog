@extends('layout')
@include('admin_nav')
@section('body-section')
<div class='content comment'>
	<table class='table'>
		
					<tr>
						<th> Comment </th>
						<th> In Response To </th>
						<th> Action </th>
					</tr>
	@foreach ($comment as $c)
				<tbody class='table-striped'>
					<tr>
						<td> {{ $c->comment }} </td>
						<td> {{ $c->post->title }} </td>
						<td>
						{{ link_to_route('delete_comment', 'Delete Comment', array('id' => $c->id)) }}
						</td>
					</tr>
				</tbody>
	@endforeach	
	</table>
</div>
@stop