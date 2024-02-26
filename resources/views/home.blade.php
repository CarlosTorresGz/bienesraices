<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Página principal de propiedades</title>
</head>
<body>
    <div>
        <h1>Mantenimiento de propiedades</h1>
        <br>
        <br>
        <a href="{{route('propiedad.create')}}" class="btn btn-primary">Agregar Propiedad</a>        
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
                @foreach ($propiedades as $propiedad)
                    <tr>
                        <td>{{$propiedad->codigoPropiedad}}</td>
                        <td>{{$propiedad->color}}</td>
                        <td>{{$propiedad->metros}}</td>
                        <td>{{$propiedad->metros*$propiedad->costoxmtr}}</td>
                        <td>
                            <a href="{{route('propiedad.edit', $propiedad->codigoPropiedad)}}">Editar</a>
                        </td>
                        <td>
                            <a href="{{route('propiedad.eliminar', $propiedad->codigoPropiedad)}}">Eliminar</a>
                        </td>
                    </tr>

                @endforeach
            </body>
        </table>

    </div>
    
</body>
</html>