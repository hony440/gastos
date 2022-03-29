@extends('layouts.app')

@section('content')
<script src="{{asset('js/categoria.js')}}"></script>
	<h1 class="bg-dark">vista para el formulario</h1>
	<form action="{{route('categoria.store')}}" method="POST" onsubmit="return validar()" >
		@csrf
		
		<label for=""> Nombre de la categoria</label>
		<input type="text" name="cat_nombre" id="cat_nombre">
		<button type="submit" class="btn btn-succes">Guardar</button>

	</form>

@endsection