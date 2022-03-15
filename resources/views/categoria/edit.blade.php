@extends('layouts.app')
@section('content')

<h3 class="bg-dark text-white">Formulario Categoria</h3>
<h1>Editar categorias</h1>

<form action="{{route('categoria.update',$categoria->cat_id)}}" method="POST" >
		@csrf
		
		<label for=""> detalle de la categoria</label>
		<input type="text" value="{{$categoria->cat_nombre}}" name="cat_nombre" id="cat_nombre">
		<button type="submit" class="btn btn-primary">guardar</button>

	</form>
@endsection