<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1 style="color:blue;"> <img src="https://www.doctorcifra.com/media/categorizar-ingresos-gastos-1024x1024.png" width="50" height="50" class="d-inline-block align-top">&nbsp;&nbsp;Reporte de Ingresos y Gastos</h1>
	@csrf

<table class="table table-striped">
	<th scope="col">#</th>
	<th scope="col">Usuario</th>
	<th scope="col">Categoria</th>
	<th scope="col">Cantidad</th>
	<th scope="col">Tipo</th>
	<th scope="col">Tipo de movimiento</th>
	<th scope="col">Fecha</th>
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
	   <td scope="col">{{$loop->iteration}}</td>
	   <td scope="col">{{$m->usu_nombre}}</td>
	   <td scope="col">{{$m->cat_nombre}}</td>
	   <td scope="col">${{number_format($m->mov_cantidad,2)}}</td>
	   <td scope="col">{{$m->tip_nombre}}</td>
	   @if($m->mov_tipo==1)
	   <td scope="col">Efectivo</td>
	   @else
	   <td scope="col">Tarjeta</td>
	   @endif
	   <!-- <td>{{$m->mov_tipo}}</td> -->
	   <td scope="col">{{$m->mov_fecha}}</td>


</tr>
@endforeach
<tr>
	<th colspan="2">Totales:</th>
	<th>Ingresos: {{$t_ing}} $</th>
	<th>Egresos: {{$t_egr}} $</th>
	<th>Saldo: {{$t_sal}} $</th>

</tr>