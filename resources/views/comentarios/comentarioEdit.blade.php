<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>EDITAR COMENTARIO</title>
</head>
<body>

<!-- Fromulario de edicion de comentario -->
    <a href="{{ route('comentario.index') }}">Listado de Comentarios</a>
    <hr>
    <h1>Editar Comentario</h1>

    @include('parciales.form-error')

    <form action="{{ route('comentario.update', $comentario) }}" method ="POST" >
        @csrf
        @method('PATCH')
        <div class="container">
      
          <label for="nombre"><b>Nombre</b></label>
          <input type="text" placeholder="Ingrese su nombre" name="nombre" value= "{{ old('nombre') ?? $comentario -> nombre}}" id="nombre">
          <hr>
      
          <label for="correo"><b>Correo</b></label>
          <input type="text" placeholder="Ingrese su correo" name="correo" value= "{{ old('correo') ?? $comentario -> correo}}" id="correo" >
          <hr>

          <label for="ciudad"><b>Ciudad</b></label>
          <select name="ciudad">
            <option value="guadalajara" @selected($comentario -> ciudad == 'guadalajara') >Guadalajara</option>
            <option value="monterrey" @selected($comentario -> ciudad == 'monterrey') >MTY</option>
          </select>
          <br>

          <label><b>Comentario</b></label>
          <textarea rows="6" placeholder="Tu mensaje" id="comentario" name="comentario" value= "{{ old('comentario') ?? $comentario -> comentario}}" required ></textarea>
          <br>
      
          <button type="submit" class="registerbtn">Enviar</button>
        </div>
    </form>
    <br><br>

</body>
</html>