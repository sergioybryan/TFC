<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>HOME</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/bf5b664e76.js" crossorigin="anonymous"></script>
		<style>
/*--------------- F U E N T E S ----------------------------------*/
				@font-face{
				font-family: "logo";
				src:url("../public/fonts/Future Earth v2.ttf");
			}
			@font-face{
				font-family:"fuente-principal";
				src:url("../public/fonts/Brookline.ttf");
			}
/*-------------- C A B E C E R A ------------------------------------*/
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
/*------------------ C U E R P O ------------------------------------------	*/		
		</style>

</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid mb-5">
			<nav class="navbar cabecera navbar-expand-md navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h3 class="home neon">Telefonía</h3>
				<div class="collapse navbar-collapse" id="menu">
					<nav class="navbar-nav">
						<ul class="navi">
							<li><a class="nav-link neon categoria" href="#">Categorías</a>
								<ul>
									<li><a class="submenu" href="#">Telefonía </a></li>
									<li><a class="submenu" href="#">Informática </a></li>
									<li><a class="submenu" href="#">Imagen y Sonido</a></li>
									<li><a class="submenu" href="#">Videojuegos</a></li>
									<li><a class="submenu" href="#">Hogar</a></li>
								</ul>
							</li>
						</ul>
							<a class="nav-link neon link" href="#">Carro de Compra</a>
							<a class="nav-link neon link" href="#">Contacto</a>
							<a class="nav-link neon link" href="#">Sobre Nosotros</a>
							
					</nav>
				</div>
				<span class="logo neon"><p>Diversa Electronics</p></span>
				<form class="form-inline">
					<input class="form-control form-control-sm mr-md-2" type="search" placeholder="Buscar" />
					<input class="btn buscar bg-primary" type="submit" value="Buscar">
				</form>
			</nav
		</div>
<!-----------------------  C A B E C E R A ------------------------------->
		
		<div class=" row align-items-center justify-content-center no-gutters ">
			 @foreach($Productos as $producto)
				@if ($producto->Categoria=='Telefonia')
				<div class=" col-md-2 ">
					<div class="card tarjeta" style="width: 18rem;">
						  <img class="card-img-top" src="../images/images_product/{{$producto->foto ? $producto->foto->ruta_foto : '-' }}" alt="roomba">
						  <div class="card-body">
							<h5 class="card-title rosa">{{$producto->Nombre}}</h5>
							<p class="card-text rosa"> {{$producto->Descripcion}}</p>
							<a href="#" class="btn btn-primary">Al Carrito!</a>
						  </div>
					</div>
				</div>
				@endif
			@endforeach
		</div>
	</div>	
</body>
</html>