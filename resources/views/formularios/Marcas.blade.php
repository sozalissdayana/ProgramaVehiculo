@extends('plantilla')
@section('contenido')
<form class="jumbotron" method="POST" action="/Marcas">
    @csrf
    <div class="form-group">
        <label for="nombre">Registrar Marca</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
    </div>

    

    <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
@endsection