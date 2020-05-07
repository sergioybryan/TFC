<?php

?>
<html>
<head>

    <script type="text/javascript" src="../../../resources/js/vinculos.js"></script>

</head>

<body>
<h1>Agregar productos</h1>

{!! Form::open(['method' => 'POST', 'action'=>'AdminProductosController@store',"files"=>true]) !!}
    
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!!Form::text('Nombre')!!}
    <br>

    {!! Form::label('Categoria', 'Categoria:') !!}
    {!!Form::text('Categoria')!!}
    <br>

    {!! Form::label('Precio', 'Precio:') !!}
    {!!Form::number('Precio','0')!!}
    <br>

    {!! Form::label('Descripcion', 'Descripcion:') !!}
    {!!Form::text('Descripcion')!!}
    <br>

    {!! Form::label('Stock', 'Stock:') !!}
    {!!Form::number('Stock','0')!!}
    <br>

    {!! Form::label('Foto', 'Foto:') !!}
    {!!Form::file('foto_id')!!}
    <br>

    {!! Form::submit('Agregar') !!}
    {!! Form::reset('Borrar') !!}

{!! Form::close() !!}
<button class="tabla" id="atras"  onclick="confirmarVolver();">Volver</button>

</body>
</html>