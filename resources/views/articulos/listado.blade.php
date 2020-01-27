@extends('plantillas.plantilla')
@section('titulo')
    Listado Articulos
@endsection

@section('cabecera')
    ARTICULOS DISPONIBLES
@endsection

@section('contenido')
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Imagen</th>
        <th scope="col">PVP </th>
      </tr>
    </thead>
    
    <tbody>
    @foreach ($articulos as $item)
      <tr>
      <th scope="row">{{$item->id}}</th>
        <td>{{$item->nombre}}</td>
        <td><img src="{{$item->imagen}}" alt=""></td>
        <td>{{$item->pvp}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection