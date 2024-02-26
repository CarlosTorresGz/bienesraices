<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Eliminar propiedad</title>
</head>
<body>
    <div>
        <h1>Está seguro que desea eliminar</h1>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Color</th>
                    <th>Metros</th>
                    <th>Precio</th>                
                </tr>
            </thead>
            <body>
                    <tr>
                        <td>{{$propiedad->codigoPropiedad}}</td>
                        <td>{{$propiedad->color}}</td>
                        <td>{{$propiedad->metros}}</td>
                        <td>{{$propiedad->metros*$propiedad->costoxmtr}}</td>
                    </tr>

            </body>
        </table>
        <div>
            <a href="{{route('propiedad.home')}}" class="btn btn-warning">Cancelar</a>
            <a href="{{route('propiedad.destroy', $propiedad->codigoPropiedad)}}" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
    
</body>
</html>