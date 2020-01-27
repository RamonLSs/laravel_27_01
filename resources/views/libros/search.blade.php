@extends('plantillas.plantilla')
@section('titulo')
    Busqueda
@endsection

@section('cabecera')
  Buscar libros
@endsection

@section('contenido')

 <div class="row mb-5">
     <div class="col-md-12">
     <form name="search" method="get" action="{{route('libros.index')}}" class="form-inline float-right">
        <h3 class="normal mr-3" style="font-weight:bold">Buscar:</h3>
        <div class="form-group mr-2">
          @if (!$request->get('titulo'))
               <input type="text" name="titulo" placeholder="titulo" />
               @else 
               <input type="text" name="titulo" value="{{$request->get('titulo')}}" placeholder="titulo" />
          @endif
           
        </div>
        <div class="form-group mr-2">
          @if (!$request->get('sinapsis'))
               <input type="text" name="sinapsis" placeholder="titulo" />
               @else 
               <input type="text" name="sinapsis" value="{{$request->get('sinapsis')}}" placeholder="sinapsis" />
          @endif
        </div>

        <div class="form-group ml-2">
          @if (!$request->get('pvp'))
          <select name="pvp" id="inline" class="form-control peque">
            <option value="1">Menor de 20€</option>
            <option value="2">20-50€</option>
            <option value="3">Mas de 50€</option>
          </select>
          @else
          <select name="pvp" id="inline" class="form-control peque" value="{{$request->get('pvp')}}">
            <option value="1">Menor de 20€</option>
            <option value="2">20-50€</option>
            <option value="3">Mas de 50€</option>
          </select>
          @endif
          <label for="inline" class="sr-only"></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">€</div>
            </div>
          
      </div>
        <div class="form-group ml-2">
            <input type="submit" value="Buscar" class="btn btn-info" />
        </div>
    </div>
    </form>
</div>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Titulo</th>
        <th scope="col">Sinapsis</th>
        <th scope="col">Precio (€)</th>
        <th scope="col">ISBN</th>
        <th scope="col">Stock</th>
        
      </tr>
    </thead>
    
    <tbody>
    @foreach ($libros as $item)
      <tr>
      <th scope="row">{{$item->id}}</th>
        <td>{{$item->titulo}}</td>
        <td>{{$item->sinapsis}}</td>
        <td>{{$item->pvp}}</td>
        <td>{{$item->isbn}}</td>
        <td>{{$item->stock}}</td>
        <td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$libros->appends(Request::except('page'))->links()}}
@endsection