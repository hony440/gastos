@extends('layouts.app')

@section('content')
<script src="{{asset('js/usuarios.js')}}"></script>
<div class="container col-md-4">
	<div class="col-md-12">
		
	<h1 class="bg-success">Registrar el usuario</h1>
	<form action="{{route('usuarios.store')}}" method="POST" onsubmit="return validar()">
		@csrf
		<div class="row ">
			<div class="col-md-6">
				<label class=""> Registre el nombre</label>		
				<input type="text" name="usu_nombre" id="usu_nombre" class="form-control">
			</div>
			<div class="col-md-6">
				<label class=""> Registre el apellido</label>
				<input type="text" name="usu_apellido" id="usu_apellido" class="form-control">
			</div>
			<div class="col-md-6">
				<label class=""> Registre la cedula</label>	
				<input type="text" name="usu_cedula" id="usu_cedula" class="form-control">
			</div>
			<div class="col-md-6">
				<label class=""> Registre su direccion</label>	
				<input type="text" name="usu_direccion" id="usu_direccion" class="form-control">
			</div>
			<div class="col-md-6">
				<label class=""> Registre su telefono</label>	
				<input type="text" name="usu_telefono" id="usu_telefono" class="form-control">
			
			</div>
			<div class="col-md-6">
				<label class=""> Registre su email</label>	
				<input type="text" name="email" id="email" class="form-control">
			
			</div>
			<div class="col-md-6">
				<label class=""> Ingrese su contraseña</label>	
				<input type="text" name="password" id="password" class="form-control">
				
			</div>

		<button  type="submit" class="btn btn-primary " >guardar</button>

			
		</div>
	</form>
	</div>

</div>
@endsection