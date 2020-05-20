<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Registro de Usuarios.</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/bf5b664e76.js" crossorigin="anonymous"></script>
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

			.col-md-4 {
				background-color: AQUA;
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
				margin-top: -6.5em;
				margin-left: 12em;
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
	<body>
	<div class="container-fluid">
		
		<div class="row cabecera pt-3">
			<div class="col-md-3 justify-content-start mt-2 logo">
				Diversa Electronics
				<img src="../public/images/copyleft.png" alt="copyleft">
			</div>
			<div class="col-md-5 offset-md-1 justify-content-center titulo">
				<h1>¡BIENVENIDO! de nuevo...</h1>
			</div>
		</div>
		
			<div class="row">	
				<div class="col-md-4 offset-md-4 pt-3 pb-4 mt-5 mb-5 formu justify-content-center bg-dark">
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<p class="text-center">Necesitamos comprobar que eres miembro de nuestra familia, ya que nuestros excepcionales artículos solo están disponibles para miembros.</p>
							
							<div class="form-group">
								<label for="email">{{ __('E-Mail:') }}</label>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									@error('email')
										<span class="invalid-feedback mensaje" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
							

							<div class="form-group">
								<label for="password">{{ __('Contraseña:') }}</label>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
									@error('password')
										<span class="invalid-feedback mensaje" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

							<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

										<label class="form-check-label" for="remember">
											{{ __('Recuérdame') }}
										</label>
									</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-8 offset-md-4">
									<button type="submit" class="btn btn-warning">
										{{ __('Entrar') }}
									</button>

									@if (Route::has('password.request'))
										<a class="btn btn-primary" href="{{ Route::view('/passwords/email') }}">
											{{ __('Olvidé mi contraseña') }}
										</a>
									@endif
								</div>
							</div>
						</form>
					</div>
				</div>
			<div class="row  footer mt-5">
				<div class="col-md-5 col-sm-12 offset-md-2 pl-3 ml-3 mt-2 iconos">
					<i class="fab fa-facebook fa-4x"></i>
					<i class="fab fa-twitter-square fa-4x pl-5"></i>
					<i class="fab fa-instagram fa-4x pl-5"></i>
					<i class="fab fa-pinterest fa-4x pl-5"></i>
				</div>
				<div class="col-md-5 col-sm-12 justify-content-center textoFooter">
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
