<table>
    <thead>
        <tr>
            <th>Id </th>
            <th>Fecha</th>
            <th>Costo</th>
            <th>Articulos (unidades)</th>
            <th>Proveedor</th>
            <th>Recibido por</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ingresos as $art)
        <tr>
            <td>{{$art->id}}</td>
            <td>{{$art->fecha}}</td>
            <td>{{$art->precio}}</td>
            <td>{{$art->productos}}</td>
            <td>{{$art->nombre}}</td>
            <td>{{$art->usuario}}</td>
        </tr>
        @endforeach
    </tbody>
</table>