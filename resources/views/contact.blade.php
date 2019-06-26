@extends('layout')
@section('title' , 'Contac')
@section('content')
	<h1>Contact</h1>
	<form method="POST" action="{{ route('contact') }}">
		@csrf
		<input name="name" placeholder="Nombre..."  value="Juan"><br>
		<input type="email" name="email" placeholder="Email..." value="juan@hotmail.com"><br>
		<input name="subject" placeholder="Asunto..." value="Asunto de Prueba"><br>
		<textarea name="content" placeholder="Mensaje..." >Mensaje de Prueba</textarea><br>
		<button>Enviar</button>
	</form>
@endsection