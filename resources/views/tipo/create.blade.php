@extends('layouts.app')

@section('content')
	<h1 class="bg-dark">Agregar tipos</h1>
	<form action="{{route('tipo.store')}}" method="POST" >
		@csrf
		
		<label for=""> Ingresar nuevpo tipo</label>
		<input type="text" name="tip_nombre" id="tip_nombre">
		<button class="btn btn-succes">Guardar</button>

	</form>

@endsection