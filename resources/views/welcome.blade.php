<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Principal</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/bf5b664e76.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        

        <!-- Styles -->
        <style>
			@font-face{
				font-family: "logo";
				src:url("../public/fonts/Future Earth v2.ttf");
			}
			
			.container{
				text-align: center;
				min-height: 100%;
				position: relative;
			}
			
			body{
				background-image: url("../public/images/Fondo_matrix.png");
			/*background-repeat: no-repeat; */
			}
			
			.principal{
				
			}
			.jumbo {
				border-radius: 15px;
			}
			.logo{
				/*color: #39D84A;*/
				color: white;
				font-family: "logo";
				font-size: 2em;
				-webkit-text-stroke: 2px blue;
				
			}
			.texto_uno{
				color: #39D84A;
				font-size: 1.5em;
				font-weight: 500;
			}
			.texto_dos{
				color: white;
			}
       		
        </style>
    </head>
    <body>
		<div class="container-fluid">
			<div class="row fantasma pt-5 pb-5">
			</div>
        	<div class= "row principal ">
				<div class="col-md-6 lg-4 offset-md-3 pt-1 mt-3 mb-5">
					<div class="jumbotron bg-dark text-center jumbo">
					  <p class="lead texto_uno">Bienvenido a Matrix! ¡ups! perdón, a</p>
					  <h1 class="display-4 logo">Diversa Electronics</h1>
					  <hr class="my-4 bg-primary">
					  <p class="texto_dos">Contamos con el mejor catálogo de componentes informáticos, teléfonos, imagen y sonido y pequeños electrodomésticos.</p><br/>
					  <p class="lead mt-3">
						  	@if (Route::has('login'))
								@auth
									<a href="{{ url('/home') }}">Home</a>
								@else
									<a class="btn btn-danger btn-lg ml-2 mr-2" href="{{ route('login') }}">Entrar</a>

									@if (Route::has('register'))
										<a class="btn btn-danger btn-lg ml-4" href="{{ route('register') }}">Registrarse</a>
									@endif
								@endauth
							@endif
					  </p>
					</div>
				 </div>
				
			 </div>
	
		</div>
		
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
