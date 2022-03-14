@extends('layouts.app')

@section('content')
	<h1 class="bg-dark">vista para el formulario</h1>
	<form action="{{route('categoria.store')}}" method="POST" >
		@csrf
		
		<label for=""> detalle de la categoria</label>
		<input type="text" name="cat_nombre" id="cat_nombre">
		<button class="btn btn-succes">guardar</button>

	</form>

@endsection