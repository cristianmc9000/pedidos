<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" type="image/x-icon" href="img/icono.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" >
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>

	<title>Ingreso</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');
	body{
		background-color: #dfe4ea;
	}
	.fuente{
		/*font-family: 'Segoe UI Light'*/
		font-family: 'Roboto', sans-serif;
	}
	.centrar{
		display: flex;
		justify-content: center;
	}
	.tam{
		font-size: 1.3em !important;
	}
</style>

<body id="cuerpo">
	<div id="section_1">
		<div class="container" style="margin-top: 10%;">
			<div class="row">
				<div class="center">
					<img src="images/arbell_logo.png" alt="">
				</div>
			</div>
		</div>

		<div class="container" style="margin-top: 5%">
			<h3 class="fuente center">Ingresa tu código de cliente Arbell</h3>

			<div class="row">
<!-- 				<div class="col s4 m3 l2 offset-l3 xl2 offset-xl3">
					<div class="input-field">
						<i class="material-icons-outlined prefix">phone</i>
						<input class="tam" type="text" id="phoneCode" name="phoneCode" value="+591" disabled>
					</div>
				</div> -->
				<div class="col s10 offset-s1 m8 l4 xl4 offset-m2 offset-l4 offset-xl4">
					<div class="input-field">
						<input class="tam" type="tel" id="codigo" name="codigo" />
						<label for="codigo" class="tam">Código Arbell</label>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="center centrar">
					<div id="recaptcha-container"></div>
				</div>
			</div>
			<div class="row">
				<div class="center">
					<button class="btn btn-large waves-effect waves-light red" id="getCodeButton" ><i class="material-icons-outlined right">lock</i>Ingresar</button>
				</div>
			</div>	
		</div>
	</div>

	<div id="section_2" hidden>
		<div class="row">
			<a href="registro.php" class="btn-large orange"><i class="material-icons-outlined">keyboard_return</i></a>
		</div>
		<div class="container">
			<h1 class="fuente center">Ingresa el código de confirmación</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col s12 l4 offset-l4">
					<div class="input-field">
						<i class="material-icons-outlined prefix">lock_open</i>
						<input class="tam" type="text" id="codeField" name="codeField">
						<label for="codeField" class="tam">Código de confirmación</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="center">
					<button class="btn btn-large waves-effect waves-light" id="signInWithPhone" ><i class="material-icons-outlined right">login</i>Ingresar</button>
				</div>
			</div>
		</div>
	</div>
</body>
<input type="text" id="existe" value="false" hidden>

<!-- <script type="module" src="https://www.gstatic.com/firebasejs/9.0.1/firebase-auth.js"></script> -->
</html>