<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Administrador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/bf5b664e76.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../resources/js/vinculos.js"></script>

		<style>
			@font-face{
				font-family: "logo";
				src:url("../../public/fonts/Future Earth v2.ttf");
			}
			.container{
				text-align: center;
				min-height: 100%;
				position: relative;

			}

			
			.cabecera, .footer{
				background: rgba(76,76,76,1);
				background: -moz-linear-gradient(-45deg, rgba(76,76,76,1) 0%, rgba(0,0,0,1) 0%, rgba(102,102,102,1) 0%, rgba(71,71,71,1) 13%, rgba(0,0,0,1) 34%, rgba(0,0,0,1) 45%, rgba(17,17,17,1) 56%, rgba(19,19,19,1) 57%, rgba(28,28,28,1) 61%, rgba(43,43,43,1) 74%, rgba(89,89,89,1) 96%, rgba(89,89,89,1) 100%);
				background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(76,76,76,1)), color-stop(0%, rgba(0,0,0,1)), color-stop(0%, rgba(102,102,102,1)), color-stop(13%, rgba(71,71,71,1)), color-stop(34%, rgba(0,0,0,1)), color-stop(45%, rgba(0,0,0,1)), color-stop(56%, rgba(17,17,17,1)), color-stop(57%, rgba(19,19,19,1)), color-stop(61%, rgba(28,28,28,1)), color-stop(74%, rgba(43,43,43,1)), color-stop(96%, rgba(89,89,89,1)), color-stop(100%, rgba(89,89,89,1)));
				background: -webkit-linear-gradient(-45deg, rgba(76,76,76,1) 0%, rgba(0,0,0,1) 0%, rgba(102,102,102,1) 0%, rgba(71,71,71,1) 13%, rgba(0,0,0,1) 34%, rgba(0,0,0,1) 45%, rgba(17,17,17,1) 56%, rgba(19,19,19,1) 57%, rgba(28,28,28,1) 61%, rgba(43,43,43,1) 74%, rgba(89,89,89,1) 96%, rgba(89,89,89,1) 100%);
				background: -o-linear-gradient(-45deg, rgba(76,76,76,1) 0%, rgba(0,0,0,1) 0%, rgba(102,102,102,1) 0%, rgba(71,71,71,1) 13%, rgba(0,0,0,1) 34%, rgba(0,0,0,1) 45%, rgba(17,17,17,1) 56%, rgba(19,19,19,1) 57%, rgba(28,28,28,1) 61%, rgba(43,43,43,1) 74%, rgba(89,89,89,1) 96%, rgba(89,89,89,1) 100%);
				background: -ms-linear-gradient(-45deg, rgba(76,76,76,1) 0%, rgba(0,0,0,1) 0%, rgba(102,102,102,1) 0%, rgba(71,71,71,1) 13%, rgba(0,0,0,1) 34%, rgba(0,0,0,1) 45%, rgba(17,17,17,1) 56%, rgba(19,19,19,1) 57%, rgba(28,28,28,1) 61%, rgba(43,43,43,1) 74%, rgba(89,89,89,1) 96%, rgba(89,89,89,1) 100%);
				background: linear-gradient(135deg, rgba(76,76,76,1) 0%, rgba(0,0,0,1) 0%, rgba(102,102,102,1) 0%, rgba(71,71,71,1) 13%, rgba(0,0,0,1) 34%, rgba(0,0,0,1) 45%, rgba(17,17,17,1) 56%, rgba(19,19,19,1) 57%, rgba(28,28,28,1) 61%, rgba(43,43,43,1) 74%, rgba(89,89,89,1) 96%, rgba(89,89,89,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#595959', GradientType=1 );
			}
			body{
				background-image:url("../public/images/fondos/fondo_6.gif");
				/*background-repeat: no-repeat; */
			}

			.titulo{
				color: #39D84A;
			}

			.formu{
				color: white;
			}

			.footer{
				  height: 5em;  
				  width:100%; 
				  position: fixed; 
				  bottom: 0; 
				  left:
				}
			.logo img{
				position: relative;
				
			}

			.logo{
				font-family: "logo";
				color:white;
			}
			i{
				color: white;
			}
			.textoFooter{
				color: #39D84A;
			}
			.mensaje{
				color: greenyellow;
			}

		</style>
	</head>
	<body class=" row align-items-center justify-content-center">
	<div class="container-fluid">
		
		<div class="row cabecera pt-4 pb-2">
			<div class="col-lg-4 logo col-md-4">
				Diversa Electronics
				<img src="../../public/images/copyleft.png" alt="copyleft">
			</div>
			<div class="col-lg-4 text-center titulo col-md-4">
				<h1>Administrador</h1>
			</div>
		</div>
		
			<div class=" row align-items-center justify-content-center ">	
				<div class="col-md-12 pt-3 pb-3 mt-5 mb-5 formu cabecera rounded col-lg-7">
                    <table class="table text-light text-center">
                        <tr class="tabla">
                        <th scope="col">ID</th>
                        <th class="tabla">Nombre</th>
                        <th class="tabla">Categoria</th>
                        <th class="tabla">Precio</th>
                        <th class="tabla">Descripcion</th>
                        <th class="tabla">Stock</th>
                        <th class="tabla">Creado</th>
						<th class="tabla">Actualizado</th>
						<th class="tabla">Foto</th>
						<th class="tabla" colspan="2" >Accion</th>
                        </tr>
                        @foreach($Productos as $producto)
                        
                        <tr>
                        <td class="tabla">{{$producto->id}}</td>
                        <td class="tabla">{{$producto->Nombre}}</td>
                        <td class="tabla">{{$producto->Categoria}}</td>
                        <td class="tabla">{{$producto->Precio}}€</td>
                        <td class="tabla">{{$producto->Descripcion}}</td>
                        <td class="tabla">{{$producto->Stock}}</td>
                        <td class="tabla">{{$producto->created_at}}</td>
                        <td class="tabla">{{$producto->updated_at}}</td>
                        <td><img src="../images/images_product/{{$producto->foto ? $producto->foto->ruta_foto : '-' }}" width="100"> </td> <!-- si el producto tiene foto, entonces la carga, si no '-' -->
                        <td class="tabla" id="editar"  onclick="confirmarEditar('{{$producto->Nombre}}',{{$producto->id}});"><button class="btn btn-warning btn-sm">Editar</button></td>
                        <td class="tabla" id="eliminar"  onclick="confirmarBorrar('{{$producto->Nombre}}',{{$producto->id}});"><button class="btn btn-danger btn-sm">Eliminar</button></td>
                        
                        
                        @endforeach
                        
                        </table>
                        <button class="tabla btn btn-primary btn-sm" id="añadir"  onclick="confirmarAñadir();" >Añadir</button>
                        
					</div>
				</div>
			<div class="row  footer mt-5">
				<div class="col-lg-3 iconos pt-2 col-md-6">
					<i class="fab fa-facebook fa-4x"></i>
					<i class="fab fa-twitter-square fa-4x pl-5"></i>
					<i class="fab fa-instagram fa-4x pl-5"></i>
					<i class="fab fa-pinterest fa-4x pl-5"></i>
				</div>
				<div class="col-lg-9 text-right col-sm-12  textoFooter pt-4 col-md-6">
					<p>Si desea ponerse en contacto,
					Escriba un correo a la siguiente dirección:
					correofalso.dediversa@diversa.com</p>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>
