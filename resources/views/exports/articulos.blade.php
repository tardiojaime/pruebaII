<table>
    <thead>
        <tr>
            <th>Id </th>
            <th>Articulo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Agregado por</th>
            <th>Fecha</th>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
        @foreach($articulos as $art)
        <tr>
            <td>{{$art->id}}</td>
            <td>{{$art->nombre}}</td>
            <td>{{$art->descripcion}}</td>
            <td>{{$art->precio}}</td>
            <td>{{$art->cantidad}}</td>
            <td>{{$art->usuario}}</td>
            <td>{{$art->fecha}}</td>
            @if($art->status == "0")
            <td>Fuera de Actividad</td>
            @else
            <td>Activo</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>