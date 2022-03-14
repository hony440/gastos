@extends('layouts.app')

@section('content')
	<h1 class="bg-dark">AGREGAR</h1>
	<form action="{{route('usuarios.store')}}" method="POST" >
		@csrf
		
		<label for=""> Registre el usuario</label>

		<input type="text" name="usu_nombre" id="usu_nombre">
		<input type="text" name="usu_apellido" id="usu_apellido">
		<input type="text" name="usu_cedula" id="usu_cedula">
		<input type="text" name="usu_direccion" id="usu_direccion">
		<input type="text" name="usu_telefono" id="usu_telefono">
		<input type="text" name="email" id="email">
		<input type="text" name="password" id="password">

		<button class="btn btn-succes">guardar</button>

	</form>

@endsection