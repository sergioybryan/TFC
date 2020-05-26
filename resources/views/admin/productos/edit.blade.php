<?php

?>
<html>
<head>

   <script type="text/javascript" src="../../../../resources/js/vinculos.js"></script>

</head>

<body>
<h1>Editar productos</h1>
<table>
{!! Form::open(['method' => 'POST', 'action'=>['AdminProductosController@update',$id],"files"=>true]) !!}
@foreach($Productos as $producto)

 @if ($producto->id==$id)<!-- por cada producto, compruebo si el id coincide con el id pasado como parametro. -->
 <tr>
    <td class="tabla">{{ Form::label('Nombre', 'Nombre:') }}
        {{Form::text('Nombre',$producto->Nombre)}}</td>

 </tr>

 <tr>
    <td class="tabla">   {{Form::label('Categoria', 'Categoria:')}}
      {{Form::select('Categoria', ['E' => 'Electronica', 'I' => 'Informatica', 'V' => 'Videojuegos', 'T' => 'Telefonia', 'H' => 'Hogar'],$producto->Categoria)}}</td>
 </tr>
 
 <tr>
 <td class="tabla">{{ Form::label('Precio', 'Precio:') }}
    {{Form::number('Precio',$producto->Precio)}}€</td>
 </tr>
 
 <tr>
     <td class="tabla">{{ Form::label('Descripcion', 'Descripcion:') }}
        {{Form::text('Descripcion',$producto->Descripcion)}}</td>
 </tr>

 <tr>
   <td class="tabla">{{ Form::label('Foto', 'Foto:') }}
      <img src="../../../images/images_product/{{$producto->foto ? $producto->foto->ruta_foto : '-' }}" width="100"> <!-- si el producto tiene foto, entonces la carga, si no '-' -->
      {!!Form::file('foto_id')!!}</td>
</tr>

 @endif


@endforeach
<tr>
   <td>
    {{Form::hidden('_method',"PUT") }}
    {{Form::submit('Actualizar') }}
        {{Form::reset('Borrar') }}
   </td>
      </tr>
{!! Form::close() !!}
</table>

<button class="tabla" id="atras"  onclick="confirmarVolver()">Atras</button>



</body>
</html>