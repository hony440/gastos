@extends('layouts.app')
@section('content')

<a href="{{route('reg_movimientos.create')}}" class="btn btn-primary btn-sm">Nuevo</a> 

<table class="table">
	<th>#</th>
	<th>Usuario</th>
	<th>Categoria</th>
	<th>tipo</th>
	<th>fecha</th>

</table>





@endsection