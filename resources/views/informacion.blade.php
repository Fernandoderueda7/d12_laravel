<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <a href="/contacto">Contacto<a/>
    <hr>
    <h1>INFORMACION</h1>

    {{ $tipo }}

    @if ($tipo == 'alumno')
        <h2>Alumnos</h2>
        <p>fefgerihiugeriugjdnkjfnjrhedcjhskj</p>
    @elseif ($tipo == 'prof' || $tipo == 'profesor')
        <h2>Profesores</h2>
        <p>fgfefwferjhgjhtjhtjhtjhtgh</p>
    @else
        <h2>Publico general</h2>
    @endif
    
</body>
</html>