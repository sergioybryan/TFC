<?php

?>
<html>
<head>
       <script type="text/javascript" src="../../../../../resources/js/vinculos.js"></script>

</head>

<body>
<center>
<h1>¿Estas seguro de que quieres eliminar el siguiente producto?</h1>
<p>{{$nombre}}</p>

<p>
    <img src="../../../../images/{{$producto->foto ? $producto->foto->ruta_foto : '-' }}" width="100">
</p>

<p>
    {!! Form::open(['method' => 'DELETE', 'action'=>['AdminProductosController@update',$id]]) !!}   
            <p onclick="alert('Exito al Borrar')">{{Form::submit('Borrar') }}</p>
    {!! Form::close() !!}
    
    <button class="tabla" id="cancelar"  onclick="confirmarCancelar()">Cancelar</button>

</p>
</center>


</body>
</html>