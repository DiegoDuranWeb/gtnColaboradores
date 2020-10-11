@extends('layouts.app')
@section('content')
<form action="{{route('eventos.store')}}" method="POST" class="container" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control">
        <x-error valor='nombre'></x-error>
    </div>

    <div class="form-group">
    <label for="">descripcion</label>
    <textarea name="descripcion" id="descripcion"  rows="5" class="form-control">
        {{old('descripcion')}}
    </textarea>
    <x-error valor="descripcion"></x-error>
    </div>

    <div class="form-group">
    <label for="">precio_total</label>
    <input step="any" type="number" name="precio_total" value="{{old('precio_total')}}" class="form-control">
    <x-error valor="precio_total"></x-error>
    </div>

    <div class="form-group">
    <label for="">descuento</label>
    <input step="any" type="number" name="descuento" value="{{old('descuento')}}" class="form-control">
    <x-error valor="descuento"></x-error>
    </div>
    <div class="form-group">

    <div class="form-group">
    <label for="">cupos</label>
    <input step="any" type="number" name="cupos" value="{{old('cupos')}}" class="form-control">
    <x-error valor="cupos"></x-error>
    </div>



    <div class="form-group">
    <label for="">fecha_inicio</label>
    <input type="date" name="fecha_inicio" value="{{old('fecha_inicio')}}" class="form-control">
    <x-error valor="fecha_inicio"></x-error>
    </div>
    <div class="form-group">
        <label for="">imagen</label>
        <input type="file" name="imagen" value="{{old('imagen')}}" class="form-control-file">
        <x-error valor="imagen"></x-error>
        </div>

        <input type="submit" class="btn btn-primary">
</form>

@endsection
