<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Creacion de comentarios</title>
</head>
<body>

<!-- Fromulario de creacion de comentario -->
    <a href="/info">Informacion<a/>
    <hr>

    <form action="/comentario" method ="POST" >
        @csrf
        <div class="container">
          <h1>Contacto</h1>
          <hr>
      
          <label for="nombre"><b>Nombre</b></label>
          <input type="text" placeholder="Ingrese su nombre" name="nombre" value=" {{ old('nombre')}}" id="nombre" required>
          <br>
      
          <label for="correo"><b>Correo</b></label>
          <input type="text" placeholder="Ingrese su correo" name="correo" value=" {{ old('correo')}}" id="correo" required>
          <br>

          <label for="ciudad"><b>Ciudad</b></label>
          <select name="ciudad">
            <option value="guadalajara">Guadalajara</option>
            <option value="monterrey"> MTY</option>
          </select>
          <br>

          <label><b>Comentario</b></label>
          <textarea rows="6" placeholder="Tu mensaje" id="comentario" name="comentario" value=" {{ old('comentario')}}"  required ></textarea>
          <br>
      
          <button type="submit" class="registerbtn">Enviar</button>
        </div>
    </form>
    <br><br>
</body>
</html>