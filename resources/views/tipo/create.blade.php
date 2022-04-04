@extends('layouts.app')

@section('content')
<script src="{{asset('js/tipo.js')}}"></script>
	<h1 class="bg-dark">Agregar tipos</h1>
	<form action="{{route('tipo.store')}}" method="POST" onsubmit="return validar()" >
		@csrf
		
		<label for=""> Ingresar nuevpo tipo</label>
		<input type="text" name="tip_nombre" id="tip_nombre">
		<button type="submit" class="btn btn-succes">Guardar</button>

	</form>

@endsection