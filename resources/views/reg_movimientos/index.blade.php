@extends('layouts.app')
@section('content')
<h2 class="bg-transparent text-success">Registro de movimientos</h2>
<a href="{{route('reg_movimientos.create')}}" class="btn btn-primary btn-sm" style="background: 	#20c997;">Nuevo</a> 

<form action="{{route('reg_movimientos.search')}}" method="POST">
	@csrf
	Desde:<input type="date" name="desde" value="{{$desde}}">
	Hasta:<input type="date" name="hasta" value="{{$hasta}}">
	<button class="btn btn-primary" value="btn_buscar" name="btn_buscar" style="background: 	#20c997;">Buscar</button>
	<button class="btn btn-danger" value="btn_pdf" name="btn_pdf">PDF</button>
</form>

<table class="table">
	<th>#</th>
	<th>Usuario</th>
	<th>Categoria</th>
	<th>Cantidad</th>
	<th>Tipo</th>
	<th>Tipo de movimiento</th>
	<th>Fecha</th>
	<?php
	$t_ing=0;
	$t_egr=0;
	$t_sal=0;
	?>
@foreach($reg_movimientos as $m)
<?php
  if($m->cat_id==2){
  	$t_ing+=$m->mov_cantidad;  	
  }else{
  	$t_egr+=$m->mov_cantidad;
  }
  $t_sal=$t_ing-$t_egr;
?>
<tr>
	   <td>{{$loop->iteration}}</td>
	   <td>{{$m->usu_nombre}}</td>
	   <td>{{$m->cat_nombre}}</td>
	   <td>${{number_format($m->mov_cantidad,2)}}</td>
	   <td>{{$m->tip_nombre}}</td>
	   @if($m->mov_tipo==1)
	   <td>Efectivo</td>
	   @else
	   <td>Tarjeta</td>
	   @endif
	   <!-- <td>{{$m->mov_tipo}}</td> -->
	   <td>{{$m->mov_fecha}}</td>

	  <td>  
	  	<div class="row">
	  	<a href="{{route('reg_movimientos.edit',$m->mov_id)}}"  class="btn btn-primary" style="background: 	#20c997;" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</a>
      

	    <form action="{{route('reg_movimientos.destroy',$m->mov_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')" >
	    	@csrf
	    	<button class="btn btn-danger" style="background: 	#dc3545;">
	    	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  			<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 	0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 	.					5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 			0 1 1 0z"/>
			</svg>
			</button>

	    </form>
		</div>	    

	</td>


</tr>
@endforeach
<tr>
	<th colspan="2">Totales:</th>
	<th>Ingresos: {{$t_ing}} $</th>
	<th>Egresos: {{$t_egr}} $</th>
	<th>Saldo: {{$t_sal}} $</th>

</tr>
</table>





@endsection