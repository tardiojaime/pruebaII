<table>
    <thead>
        <tr>
            <th>Id </th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <td>Estado</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rol}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            @if($user->status == "0")
            <td>Fuera de Actividad</td>
            @else
            <td>Activo</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>