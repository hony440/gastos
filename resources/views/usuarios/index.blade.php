@extends('layouts.app')
@section('content')

<h2 class="bg-transparent text-success">Lista de usuarios</h2> 
<a href="{{route('usuarios.create')}}" class="btn btn-primary" style="background:   #20c997;">NUEVO</a>

<table class="table table-dark table-sm">
<th>#</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Email</th>
  @foreach($usuarios as $u)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{ $u->usu_nombre }}</td>
    <td>{{ $u->usu_apellido }}</td>
    <td>{{ $u->usu_cedula }}</td>
    <td>{{ $u->usu_direccion }}</td>
    <td>{{ $u->usu_telefono }}</td>
    <td>{{ $u->email }}</td>
    
  </tr>
  @endforeach
</table>

@endsection