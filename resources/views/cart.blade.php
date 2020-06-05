<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>HOME</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/bf5b664e76.js" crossorigin="anonymous"></script>
		<style>
			@font-face{
				font-family: "logo";
				src:url("../public/fonts/Future Earth v2.ttf");
			}
			@font-face{
				font-family:"fuente-principal";
				src:url("../public/fonts/Brookline.ttf");
			}
			@font-face{
				font-family: "home";
				src:url("../public/fonts/FunSized.ttf");
			}
			@font-face{
				font-family:"promocion";
				src:url("../public/fonts/VTC-GarageSale.ttf");
			}
		
/*---------------- CABECERA ----------------------------------------------------------*/			
/*--------------- SUBMENÚ CABECERA ---------------	-->*/
			.cabecera{
				background: rgba(193,70,161,1);
				background: -moz-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: -webkit-gradient(left top, right top, color-stop(0%, rgba(193,70,161,1)), color-stop(18%, rgba(203,96,179,1)), color-stop(38%, rgba(168,0,119,1)), color-stop(57%, rgba(168,0,119,1)), color-stop(77%, rgba(219,54,164,1)), color-stop(100%, rgba(219,54,164,1)));
				background: -webkit-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: -o-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: -ms-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				background: linear-gradient(to right, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c146a1', endColorstr='#db36a4', GradientType=1 );
			}
			ul, ol {
				list-style:none;
			}
			.navi li ul li{
				position:relative;
			}
			.navi li ul li ul{
				right:-140px;
				top:0px;
			}
			.navi li:hover > ul {
				display:block;
			}
			.navi li ul {
				display:none;
				position:absolute;
				min-width:180px;
			}
			.navi li a:hover {
				/*background-color: #546270;*/
				color: #0BFF57;
			}
			.navi li a {
				color: black;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			.navi li{
				list-style-type: none;
   				display: inline;
			}
			.navi li a{
				color: white;
			}
			.submenu{
				background-color: #A80077;
			}
/*-----------------------	NEON --------------------------*/
			.neon:hover{
				-webkit-animation: neon 1.5s ease-in-out infinite alternate; 
			}
			@-webkit-keyframes neon {
			  from {
				text-shadow: 0 0 10px #fff,
						   0 0 20px  #fff,
						   0 0 30px  #fff,
						   0 0 40px  #FF9900,
						   0 0 70px  #FF9900,
						   0 0 80px  #FF9900,
						   0 0 100px #FF9900,
						   0 0 150px #FF9900;
			  }to {
				text-shadow: 0 0 5px #fff,
						   0 0 10px #fff,
						   0 0 15px #fff,
						   0 0 20px #FF9900,
						   0 0 35px #FF9900,
						   0 0 40px #FF9900,
						   0 0 50px #FF9900,
						   0 0 75px #FF9900;
			  }
			}
/*-----------------------	NEON --------------------------*/
			.categoria{
				color: white !important;
				font-family: "fuente-principal";
				text-transform: uppercase;
				font-size: 1.2em;
				padding-top: 1em;
			}
/*		-------------------------------------*/
			.link{
				padding-top: 0;
				color: white !important;
				font-family: "fuente-principal";
				text-transform: uppercase;
				font-size: 1.2em;
				padding: 0.5em;
			}
			.logo{
				font-family: "logo";
				color:white;
				margin-right: 5em;
				margin-left: 3em;
				
			}
			.buscar{
				color: white;
				font-family: "fuente-principal";
				text-transform: uppercase;
			}
			.home{
				font-family: "home";
				color: greenyellow;
			}
/*------------------------	CABECERA  ----------------------------*/
/*------------------------   CUERPO  -------------------------------------------------------*/
			
			body{
				background-image: url("../public/images/fondos/fondo_3.gif");
			}
			
/*-----------------  S L I D E R -------------------------------*/
		
			
/*----------------- S L I D E R -------------------------------*/
			.contenido{
				/*background-color: white;*/
				padding-top: 1em;
				padding-bottom: 1em;
				background-color: black;
				
			}
			.contenido-categorias{
				padding-top: 1em;
				padding-bottom: 1em;
				background-color: black;
			}
			
			.imagecarousel{
				position: relative;
				width: 70%;
			}
			d-block{
				max-height: 300px;
			}
			.content{
				margin-top: 12em;
			}
			.encabezado{
				background-color: #A80077 !important;
				border: 2px black !important;

			}
			.texto1{
				color:white;
			}
			.lista{
				background-color: #D16598 !important;
				color: white;
				border: 2em black !important;
				
			}
			.lista:hover{
				background-color: white !important;
				
			}
/*------------------- 2ª F I L A -----------------------------------*/
			.fila2{
				background-color: black;
			}
			.tarjeta{
				background-color: black;
				padding-top: 3em,
			}
			.promocion{
				font-family: "promocion";
				font-size: 2.7em;
				color: white;
				font-weight: bold;
				
			}
			.rosa{
				color: hotpink;
			}
			.rosa:hover{
				color: white;
			}
/*----------- footer -------------------------------------*/
			.footer{
				  height: 5em;  
				  width:100%; 
				  position: fixed; 
				  bottom: 0; 
				  background: rgba(193,70,161,1);
				  background: -moz-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(193,70,161,1)), color-stop(18%, rgba(203,96,179,1)), color-stop(38%, rgba(168,0,119,1)), color-stop(57%, rgba(168,0,119,1)), color-stop(77%, rgba(219,54,164,1)), color-stop(100%, rgba(219,54,164,1)));
				  background: -webkit-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: -o-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: -ms-linear-gradient(left, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  background: linear-gradient(to right, rgba(193,70,161,1) 0%, rgba(203,96,179,1) 18%, rgba(168,0,119,1) 38%, rgba(168,0,119,1) 57%, rgba(219,54,164,1) 77%, rgba(219,54,164,1) 100%);
				  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c146a1', endColorstr='#db36a4', GradientType=1 );
			}
			i{
				color: white;
			}
			.textoFooter{
				color: white;
			}
		</style>
		<script>
		
		</script>
	</head>
	<body>
		<div class="container-fluid">

            <!----------------------------	C A B E C E R A  ------------------------->
			
			<div class="row-fluid mb-5">
				<nav class="navbar cabecera navbar-expand-md navbar-dark bg-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h3 class="home neon">HOME</h3>
					<div class="collapse navbar-collapse" id="menu">
						<nav class="navbar-nav">
							<ul class="navi">
								<li><a class="nav-link neon categoria" href="#">Categorías</a>
									<ul>
										<li><a class="submenu" href="{{ url('/telefonia/T') }}">Telefonía </a></li>
										<li><a class="submenu" href="{{ url('/informatica/I') }}">Informática </a></li>
										<li><a class="submenu" href="{{ url('/imagen/S') }}">Imagen y Sonido</a></li>
										<li><a class="submenu" href="{{ url('/videojuegos/V') }}">Videojuegos</a></li>
										<li><a class="submenu" href="{{ url('/hogar/H') }}">Hogar</a></li>
									</ul>
								</li>
							</ul>
								<a class="nav-link neon link" href="#">Carro de Compra</a>
								<a class="nav-link neon link" href="{{ url('/home') }}">Home</a>
								<a class="nav-link neon link" href="#">Sobre Nosotros</a>
							
						</nav>
					</div>
					<span class="logo neon"><a href="{{ route('home') }}">Diversa Electronics</a></span>
					<ul class="navi">
						<li><a class="nav-link neon categoria" href="#">{{$usuario ?? ''}}</a>
							<ul>
								<li><a class="submenu" href="#">Mi perfil </a></li>
								<li><a class="submenu" href="#">Mis pedidos </a></li>
								<li><a class="submenu" href="#">Carrito </a></li>
								<li><a class="submenu btn btn-danger" href="{{ url('/logout') }}">Cerrar Sesion</a>  </li>
							</ul>
						</li>
					</ul>
					
					<form class="form-inline">
						<input class="form-control form-control-sm mr-md-2" type="search" placeholder="Buscar" />
						<input class="btn buscar bg-primary" type="submit" value="Buscar">
					</form>

				</nav>
            </div>	
            
<!----------------- C U E R P O   D E   L A   P A G I N A --------------------------->

            <div class="container text-center">
                <div class="page-header">
                    <h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre:</th>
                                <th>Categoría:</th>
                           
                                <th>Cantidad:</th>
                                <th>Subtotal:</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
							@if ($cart!=null)
								
							
							@foreach ($cart as $contenido)
							
								@foreach ($contenido as $producto)
                            <tr>
								<td><img src="../images/images_product/{{$producto->foto ? $producto->foto->ruta_foto : '-' }}" width="100"> </td> <!-- si el producto tiene foto, entonces la carga, si no '-' -->
                                <td>{{ $producto->Nombre }}</td>
                                <td>{{ $producto->Categoria }}</td>
                                <td>${{ number_format($producto->Precio,2) }}</td>
                                <td>{{ $producto->Cantidad }}</td>
                                <td>${{ number_format($producto->Precio * $producto->Cantidad,2) }}</td>
                                <td>
                                    <a href="{{action('CartController@delete', [$producto->id]) }}" class="btn btn-danger">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
							</tr>
								@endforeach

							@endforeach
							
							@endif
                        </tbody>
                    </table>
				</div>
				<button onclick="window.history.back()" class="btn btn-danger">Volver</button>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>   