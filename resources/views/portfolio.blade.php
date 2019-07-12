@extends('layout')
@section('title' , 'Portfolio')
@section('content')
	<h1>{{ __('Portfolio') }}</h1>
	<ul>
		@isset($portfolio)
			@foreach ($portfolio as $portfolioitem)
				<li> {{ $portfolioitem['title'] }}</li>
			@endforeach
			@else
				<li>No hay proyectos para mostrar</li>
		@endisset
	</ul>
@endsection