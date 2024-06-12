<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <style>
    </style>
</head>
<body>
    <center>
            @foreach ($biblioteca as $Libro)
            <tr>
            <BR>
                <td>{{$Libro->id}}</td>
                <td>{{$Libro->titulo}}</td>
                <td>{{$Libro->codigo}}</td>
                <td>{{$Libro->editorial}}</td>
                <td>{{$Libro->paginas}}</td>
                <td>{{$Libro->ISBN}}</td>
                <td>
                <a href="{{route('libro.show',$Libro->id)}}">Mostrar</a></td>
                <td>
                    <form action="{{route('libro.destroy',$Libro->id)}}" method="POST">
                        @csrf
                        @method('delete')

                        <button type="submit">Eliminar Producto</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
