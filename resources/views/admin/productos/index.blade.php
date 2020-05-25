<?php

?>
<html>
<head>

    <style>
        .tabla{border: 1px black solid}
    </style>
    <script type="text/javascript" src="../../resources/js/vinculos.js"></script>

</head>
<body>

<table>
<tr class="tabla">
<th class="tabla">ID:</th>
<th class="tabla">Nombre:</th>
<th class="tabla">Categoria:</th>
<th class="tabla">Precio:</th>
<th class="tabla">Descripcion:</th>
<th class="tabla">Stock:</th>
<th class="tabla">Creado:</th>
<th class="tabla">Actualizado:</th>
</tr>
@foreach($Productos as $producto)

<tr>
<td class="tabla">{{$producto->id}};</td>
<td class="tabla">{{$producto->Nombre}}</td>
<td class="tabla">{{$producto->Categoria}}</td>
<td class="tabla">{{$producto->Precio}}€</td>
<td class="tabla">{{$producto->Descripcion}}</td>
<td class="tabla">{{$producto->Stock}}</td>
<td class="tabla">{{$producto->created_at}}</td>
<td class="tabla">{{$producto->updated_at}}</td>
<td><img src="../images/{{$producto->foto ? $producto->foto->ruta_foto : '-' }}" width="100"> </td> <!-- si el producto tiene foto, entonces la carga, si no '-' -->
<td class="tabla" id="editar"  onclick="confirmarEditar('{{$producto->Nombre}}',{{$producto->id}});"><button>Editar</button></td>
<td class="tabla" id="eliminar"  onclick="confirmarBorrar('{{$producto->Nombre}}',{{$producto->id}});"><button>Eliminar</button></td>
</tr>

@endforeach

</table>
<button class="tabla" id="añadir"  onclick="confirmarAñadir();">Añadir</button>


<h3>Categorias</h3>
<p><a href='#' onclick="mostrarCategorias('E')">Electronica</a></p>
<p><a href='#' onclick="mostrarCategorias('V')">Videojuegos</a></p>
<p><a href='#' onclick="mostrarCategorias('I')">Informatica</a></p>
<p><a href='#' onclick="mostrarCategorias('T')">Telefonia</a></p>
<p><a href='#' onclick="mostrarCategorias('H')">Hogar</a></p>

</body>
</html>