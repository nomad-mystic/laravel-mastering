@extends('layouts.app')

@section('content')
	<h1>This is the Contact page</h1>
	@if (count($people))
		<ul>
			@foreach ($people as $person)
				<li>{{ $person }}</li>
			@endforeach
		</ul>
	@endif
@stop


@section('javascript')
	{{--<script>alert('This is JS')</script>--}}
@stop
