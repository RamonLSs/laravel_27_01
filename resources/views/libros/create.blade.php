@extends('plantillas.plantilla')
@section('titulo')
    Listado Articulos
@endsection

@section('cabecera')
    ARTICULOS DISPONIBLES
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
<form name="crear" action="{{route('libros.store')}}" method="POST">
    @csrf
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Titulo" name="titulo" required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="ISBN" maxlength="13" name="isbn" required>
      </div>
    </div>

    <div class="row mt-3">
        <div class="col">
          <input type="number" class="form-control" placeholder="PVP(€)" step="0.10" min="0" name="pvp" required>
        </div>
        <div class="col">
          <input type="number" class="form-control" placeholder="Stock" min="0" step="1" name="stock">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
            <label for="ta" class="normal">Sinapsis</label>
            <textarea class="form-control" id="a"  rows="4" name="sinapsis" required></textarea>
        </div>
      </div>
      <div class="row mt-3">
          <div class="col">
              <input type="submit" class="btn btn-info normal" value="Crear">
              <input type="reset" class="ml-3 btn btn-warning normal" value="Limpiar">
          <a href="{{route('libros.listado')}}" class="ml-3 btn btn-success normal">Volver</a>
          </div>
      </div>
  </form>
@endsection