<x-mi-layout titulo="Detalle del comentario">

    <ul>
        <li>Nombre: {{ $comentario->nombre }}</li>
        <li>Correo: {{ $comentario->correo }}</li>
        <li>Comentario: {{ $comentario->comentario }}</li>
        <li>Ciudad: {{ $comentario->ciudad }}</li>
    </ul>

</x-mi-layout>