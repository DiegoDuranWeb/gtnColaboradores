
<a href="{{route('nuevo.usuario')}}">Nuevo usuario</a>
<table class="table-responsive">
    <thead>
        <tr>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <td>{{$usuario->email}}</td>
        @endforeach
    </tbody>
</table>
