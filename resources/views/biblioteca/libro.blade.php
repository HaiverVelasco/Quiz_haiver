<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Libro</title>
    <style>
    </style>
</head>
<body>
    <h1>libro</h1>
    <form action="{{route('libro.organizar')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el nombre del libro:
            <input type="text" name="titulo" >
        </label>
        <label>
            Digite codigo del libro:
            <input type="integer" name="codigo">
        </label>
        <label>
            Descripción editorial:
            <input type="text" name="editorial">
        </label>
        <label>
            Cantidad de paginas:
            <input type="number" name="paginas" >
        </label>
        <label>
            Digite la ISBN:
            <input type="integer" name="ISBN" >
        </label>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
