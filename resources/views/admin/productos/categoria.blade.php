<?php
switch($c) {
    case 'V':
        $categoria="Videojuegos";// 

      break;
    case "I":
    $categoria="Informatica";// 
      break;
    case "E":
    $categoria="Electronica";// 
      break;
    
    case "H":
        $categoria="Hogar";// 
      break;
    case "T":
    $categoria="Telefonia";// 
      break;
    
  
  }
?>
<html>
<head>

    <script type="text/javascript" src="../../../../resources/js/vinculos.js"></script>

</head>

<body>
<h1>{{$categoria}}</h1>

@foreach($lista as $producto)
 @if ($producto->Categoria==$c)
     
 
<tr>

<td class="tabla">{{$producto->Nombre}}</td>
<td class="tabla">{{$producto->Categoria}}</td>
<td class="tabla">{{$producto->Precio}}€</td>
<td class="tabla">{{$producto->Descripcion}}</td>
<td class="tabla">{{$producto->Stock}}</td>

<td><img src="../../../images/{{$producto->foto?$producto->foto->ruta_foto : '-' }}" width="100"> </td> <!-- si el producto tiene foto, entonces la carga, si no '-' -->

</tr>
@endif
@endforeach
<button class="tabla" id="atras"  onclick="confirmarVolver();">Volver</button>

</body>
</html>