@extends('layouts.app')
@section('content')

    <div class="form-group">
        <label for="">Nombre</label>
        <input disabled type="text" name="nombre" value="{{$evento->nombre}}" class="form-control">
    </div>

    <div class="form-group">
    <label for="">descripcion</label>
    <textarea name="descripcion" id="descripcion"  rows="5" class="form-control">
        {{$evento->descripcion}}
    </textarea>
    </div>

    <div class="form-group">
    <label for="">precio_total</label>
    <input step="any" disabled type="number" name="precio_total" value="{{$evento->precio_total}}" class="form-control">
    </div>

    <div class="form-group">
    <label for="">descuento</label>
    <input step="any" disabled type="number" name="descuento" value="{{$evento->descuento}}" class="form-control">
    </div>
    <div class="form-group">

    <div class="form-group">
    <label for="">cupos</label>
    <input step="any" disabled type="number" name="cupos" value="{{$evento->cupos}}" class="form-control">
    </div>



    <div class="form-group">
    <label for="">fecha_inicio</label>
    <input disabled type="date" name="fecha_inicio" value="{{$evento->fecha_inicio}}" class="form-control">
    <x-error valor="fecha_inicio"></x-error>
    </div>
    <div class="form-group">
        <img src="/storage/eventos/{{$evento->imagen}}" alt="" width="300px" class="img-fluid">
    </div>



@endsection
