@extends('layouts.app')
@section('content')

<h3 class="bg-dark text-white">Formulario Categoria</h3>
<h1>Editar Movimientos</h1>

<form action="{{route('reg_movimientos.update',$reg_movimientos->mov_id)}}" method="POST" >
		@csrf
		
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<label>Categoria</label>
						<select name="cat_id" id="cat_id" class="form-control">
						<option value=""> Elije el tipo</option>
						@foreach($categoria as $c)
						<option value="{{$c->cat_id}}">{{$c->cat_nombre}}</option>
						@endforeach
						</select>
					</div>

					<div class="col-md-4">
					<label for="">Tipo</label>
					<select name="tip_id" id="tip_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($tipo as $t)
						<option value="{{$t->tip_id}}">{{$t->tip_nombre}}</option>
						@endforeach



					</select>		
					</div>
					<div class="col-md-4">
						<label for="">Fecha</label>
						<input type="date"  value="{{$reg_movimientos->mov_fecha}}" name="mov_fecha" id="mov_fecha" class="form-control" >
					</div>
					<div class="col-md-4">
						Efectivo<input type="radio" name="mov_tipo" id="mov_tipo" value="1" >
						Tarjeta<input type="radio"  name="mov_tipo" id="mov_tipo"  value="0">
					</div>
					
					<div class="col-md-4">
						<label for="">Cantidad</label>
						<input type="text" value="{{$reg_movimientos->mov_cantidad}}" name="mov_cantidad" id="mov_cantidad">
					</div>

					<div class="col-md-12 mt-3">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</div>


	</form>
@endsection