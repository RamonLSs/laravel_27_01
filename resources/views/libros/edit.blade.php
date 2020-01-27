@extends('plantillas.plantilla')
@section('titulo')
    Editar Libros
@endsection

@section('cabecera')
   Edita libros
@endsection

@section('contenido')
<div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
          @endforeach
        </ul>
    @endif
  </div>
<form action="{{route('libros.update', $libro)}}" method="post" name="crear">
@csrf
@method('PUT')
<div class="row">
    <div class="col">
        <input type="text" name="titulo" value="{{$libro->titulo}}" class="form-control" required>
    </div>
    <div class="col">
        <input type="text" name="isbn" value="{{$libro->isbn}}" class="form-control" maxlength="13" required>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <input type="number" name="pvp" value="{{$libro->pvp}}" class="form-control" step="0.10" min="0" required>
    </div>
    <div class="col">
        <input type="number" name="stock" value="{{$libro->stock}}" class="form-control" step="1" min="0" required>
    </div>
</div>

<div class="row mt-3">
  <div class="col">
    <label for="ta" class="normal">Sinapsis</label>
  <textarea name="sinapsis" id="a" rows="4" class="form-control" required>{{$libro->sinapsis}}</textarea>
  </div>
</div>

<div class="row mt-3">
  <div class="col">
    <input type="submit" value="Editar" class="btn tbn-info normal">
  <a href="{{route('libros.listado')}}" class="btn btn-success normal ml-3">Volver</a>    
  <div>
</div>

</form>
@endsection