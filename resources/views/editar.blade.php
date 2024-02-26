<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar propiedad</title>
</head>
<body>
    <h2>Editar Propiedad</h2>
    <div>
        <label>Codigo de propiedad:</label>
        <input type="text" name="color" value="{{$propiedad->codigoPropiedad}}" readonly>
    </div>
    <br>
    <form action='{{route('propiedad.actualizar', $propiedad->codigoPropiedad)}}' method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Color:</label>
            <input type="text" name="color" value="{{$propiedad->color}}">
        </div>
        <div>
            <label>Metros:</label>
            <input type="text" name="metros" value="{{$propiedad->metros}}">
        </div>
        <div>
            <label>Tipo Propiedad:</label>
            <input type="text" name="tipoPropiedad" value="{{$propiedad->tipoPropiedad}}">
        </div>
        <div>
            <label>Costo por metro:</label>
            <input type="text" name="costomtr" value="{{$propiedad->costoxmtr}}">
        </div>
        <div>
            <label>Codigo dueño:</label>
            <input type="text" name="codigoduenio" value="{{$propiedad->codigoDuenio}}">
        </div>
        <div>
            <label>Domicilio:</label>
            <input type="text" name="domicilio" value="{{$propiedad->domicilio}}">
        </div>
        
        <div>
        <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</body>
</html>