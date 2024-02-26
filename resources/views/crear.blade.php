<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nueva propiedad</title>
</head>
<body>
    <h2>Crear Nueva Propiedad</h2>
    <br>
    <form action='{{route('propiedad.store')}}' method="POST">
        @csrf
        <div>
        <label>Color:</label>
        <input type="text" name="color">
        </div>
        <div>
            <label>Metros:</label>
            <input type="text" name="metros">
        </div>
        <div>
            <label>Tipo Propiedad:</label>
            <input type="text" name="tipoPropiedad">
        </div>
        <div>
            <label>Costo por metro:</label>
            <input type="text" name="costomtr">
        </div>
        <div>
            <label>Codigo dueño:</label>
            <input type="text" name="codigoduenio">
        </div>
        <div>
            <label>Domicilio:</label>
            <input type="text" name="domicilio">
        </div>
        
        <div>
        <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</body>
</html>