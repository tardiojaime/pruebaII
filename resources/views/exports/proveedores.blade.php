<table>
    <thead>
        <tr>
            <th>Id </th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Fecha</th>
            <th>Usuario</th>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
        @foreach($proveedores as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->nombre}}</td>
            <td>{{$pro->email}}</td>
            <td>{{$pro->telefono}}</td>
            <td>{{$pro->direccion}}</td>
            <td>{{$pro->fecha}}</td>
            <td>{{$pro->usuario}}</td>
            @if($pro->status == "0")
            <td>Fuera de Actividad</td>
            @else
            <td>Activo</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>