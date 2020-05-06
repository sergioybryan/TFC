<?php

?>
<html>
<head></head>

<body>
<h1>Editar productos</h1>
<table>
{!! Form::open(['method' => 'POST', 'action'=>['AdminProductosController@update',$id]]) !!}
@foreach($Productos as $producto)

 @if ($producto->id==$id)
 <tr>
    <td class="tabla">{{ Form::label('Nombre', 'Nombre:') }}
        {{Form::text('Nombre',$producto->Nombre)}}</td>

 </tr>

 <tr>
    <td class="tabla">   {{Form::label('Categoria', 'Categoria:')}}
        {{Form::text('Categoria',$producto->Categoria)}}</td>
 </tr>
 
 <tr>
 <td class="tabla">{{ Form::label('Precio', 'Precio:') }}
    {{Form::number('Precio',$producto->Precio)}}€</td>
 </tr>
 
 <tr>
     <td class="tabla">{{ Form::label('Descripcion', 'Descripcion:') }}
        {{Form::text('Descripcion',$producto->Descripcion)}}</td>
 </tr>

 @endif


@endforeach
<tr>
    {{Form::hidden('_method',"PUT") }}
    {{Form::submit('Agregar') }}
        {{Form::reset('Borrar') }}
     </tr>
{!! Form::close() !!}
</table>

    


</body>
</html>