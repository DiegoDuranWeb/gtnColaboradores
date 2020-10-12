@extends('dashboard.app')
@section('content')
<div class="container">
    <h1>Formulario</h1>
        <form action="{{}}" method="post">
            <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="form-group">
            <label for="">Documento</label>
            <input type="text" class="form-control" name="documento">
        </div>
        <div class="form-group">
            <label for="">sueldo</label>
            <input type="text" class="form-control" name="sueldo" >
            <input type="hidden" name="usuario_id" value="{{$usuario}}">
        </div>
        <button type="submit" class="btn btn-outline-danger">Guardar</button>
    </form>
</div>
@endsection
