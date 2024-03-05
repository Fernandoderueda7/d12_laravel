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
    <h1>Crear comentarios</h1>

    @include('parciales.form-error')

    <form action="{{ route('comentario.store') }}" method ="POST" >
        @csrf
        <div class="container">
          <hr>
          <label for="nombre"><b>Nombre</b></label>
          <input type="text" placeholder="Ingrese su nombre" name="nombre" value=" {{ old('nombre')}}" required>
          @error('nombre')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <br>
      
          <label for="correo"><b>Correo</b></label>
          <input type="text" placeholder="Ingrese su correo" name="correo" value=" {{ old('correo')}}" id="correo" required>
          @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <br>

          <label for="ciudad"><b>Ciudad</b></label>
          <select name="ciudad">
            <option value="guadalajara" @selected(old('ciudad') == 'guadalajara') >Guadalajara</option>
            <option value="monterrey" @selected(old('ciudad') == 'monterrey')> MTY</option>
          </select>
          <br>

          <label><b>Comentario</b></label>
          <textarea rows="6" placeholder="Tu mensaje" id="comentario" name="comentario" cols="30" rows="5" value=" {{ old('comentario')}}"  required ></textarea>
          <br>
      
          <button type="submit" class="registerbtn">Enviar</button>
        </div>
    </form>
    <br><br>
</body>
</html>