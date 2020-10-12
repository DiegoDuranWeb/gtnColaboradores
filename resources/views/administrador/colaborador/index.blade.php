@extends('dashboard.app')
@section('content')
<table class="table table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Sueldo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colaboradores as $colaborador)
            <tr>
                <td>{{$colaborador->id}}</td>
                <td>{{$colaborador->nombre}}</td>
                <td>{{$colaborador->apellido}}</td>
                <td>{{$colaborador->documento}}</td>
                <td>{{$colaborador->sueldo}}</td>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
