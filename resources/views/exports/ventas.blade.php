<table>
    <thead>
        <tr>
            <th>Id </th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>Vendidos</th>
            <th>vendedor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ventas as $art)
        <tr>
            <td>{{$art->id}}</td>
            <td>{{$art->precio}}</td>
            <td>{{$art->fecha}}</td>
            <td>{{$art->vendidos}}</td>
            <td>{{$art->usuario}}</td>
        </tr>
        @endforeach
    </tbody>
</table>