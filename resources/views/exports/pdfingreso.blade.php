<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<style>
.card {
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 5px;
    font-weight: bold;
    color: black;
    text-align: center;
    border: 1px solid green;
}

thead {
    background-color: teal;
    color: white;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    padding: 8px;
}

td {
    padding: 7px;

}

tr {
    border-top: 1px solid;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #cfe4e4;
}
</style>

<body>
    <div class="card">
        Informacion del Ingreso
    </div>
    <table class="">
        <thead class="">
            <tr>
                <th>Id </th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Proveedor</th>
                <td>Email Proveedor</td>
                <td>Recibido por</td>
            </tr>
        </thead>
        <tbody>
            @foreach($ingreso as $ing)
            <tr>
                <td>{{$ing->id}}</td>
                <td>{{$ing->precio}}</td>
                <td>{{$ing->fecha}}</td>
                <td>{{$ing->nombre}}</td>
                <td>{{$ing->email}}</td>
                <td>{{$ing->usuario}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card">
        Detalles del Ingreso
    </div>
    <table class="">
        <thead class="">
            <tr>
                <th>Id </th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detalle as $det)
            <tr>
                <td>{{$det->id}}</td>
                <td>{{$det->nombre}}</td>
                <td>{{$det->cantidad}}</td>
                <td>{{$det->precio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>