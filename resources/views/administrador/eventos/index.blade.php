<a href="{{route('eventos.create')}}">Nuevo evento</a>

<table class="table-responsive">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Cupos</th>
            <th>cupos disponibles</th>
            <th>Publicado</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eventos as $evento)
            <tr>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->fecha_inicio}}</td>
                <td>{{$evento->cupos}}</td>
                <td>{{$evento->existencia}}</td>
                <td>{{$evento->estado}}</td>
                <td>
                    <a href="{{route('eventos.show', ['evento' => $evento->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
