@extends('layouts.app')
@section('content')

<h3 class="bg-dark text-white">Formulario Editar Tipos</h3>
<h1>Editar Tipos</h1>

<form action="{{route('tipo.update',$tipo->tip_id)}}" method="POST" >
		@csrf
		
		<label for=""> Detalle el tipo</label>
		<input type="text" value="{{$tipo->tip_nombre}}" name="tip_nombre" id="tip_nombre">
		<button type="submit" class="btn btn-primary">Guardar</button>

	</form>
@endsection