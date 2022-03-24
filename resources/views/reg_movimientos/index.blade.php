@extends('layouts.app')
@section('content')

<a href="{{route('reg_movimientos.create')}}" class="btn btn-primary btn-sm">Nuevo</a> 

<table class="table">
	<th>#</th>
	<th>Fecha</th>
	<th>Tipo</th>
	<th>Cantidad</th>
	<th>Categoria</th>
	<th>Usuario</th>
	<th>Tipo de movimiento</th>
@foreach($reg_movimientos as $m)
<tr>
	   <td>{{$loop->iteration}}</td>
	   <td>{{$m->mov_fecha}}</td>
	   <td>{{$m->mov_tipo}}</td>
	   <td>{{$m->mov_cantidad}}</td>
	   <td>{{$m->usu_id}}</td>
	   <td>{{$m->tip_id}}</td>
	   <td>{{$m->cat_id}}</td>

</tr>
@endforeach
</table>





@endsection