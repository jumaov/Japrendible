@extends('layout')
@section('title' , 'Contac')
@section('content')
	<h1>{{ __('Contact') }}</h1>
	<form method="POST" action="{{ route('contact') }}">
		@csrf
		<input name="name" placeholder="Nombre..."  value="{{ old('name') }}"><br>
		{!! $errors ->first('name' , '<small>:message</small><br>') !!}
		{{-- el type de email se cambia a texto solo para este ejercicio,debe ser email --}}
		<input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
		{!! $errors ->first('email' , '<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
		{!! $errors ->first('subject' , '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Mensaje..." >{{ old('content') }}</textarea><br>
		{!! $errors ->first('content' , '<small>:message</small><br>') !!}

		<button>@lang('Send')</button>
	</form>
@endsection