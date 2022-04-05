
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" >
	<link rel="stylesheet" href="css/jquery.nice-number.css">
	<link rel="stylesheet" href="css/index.css">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/jquery.nice-number.js"></script>

	<title>Document</title>
</head>
<style>
	.grande{
		font-size: 3rem !important;
		/*color: #2ecc71;*/
	}
	.contenedor{
		margin-top: 5%;
		display: flex;
		gap: 20px;
	}
	.left_arrow{
		width: 15%;
		/*background-color: red;*/
		position: absolute;
		height: 60%;
	}
	.catalogo{
		height: 60%;
		width: 70%;
	}
	.right_arrow{
		right: 0;
		width: 15%;
		/*background-color: red;*/
		position: absolute;
		height: 60%;
	}
	.left_arrow a{
		position: relative;
		top: 40%;
	}
	.right_arrow a{
		position: relative;
		top: 40%;
	}
	.catalogo{
		left: 15%;
		position: relative;
	}

</style>

<body>
<div class="nav_container">
	<nav>
		<div class="nav-wrapper">
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<a href="#" class="brand-logo center fuente">Dist. Carmina</a>
			<ul class="right">
				<li><a href="#"><i class="grande material-icons">shopping_cart</i></a></li>
			</ul>
		</div>
	</nav>

	<ul id="slide-out" class="sidenav">
	    <li><div class="user-view">
	      <div class="background">
	        <img src="images/sort_desc.png" height="100%" width="100%">
	      </div>
	      <a href="#user"><img class="circle" src="images/logo_sin_fondo.png"></a>
	      <a href="#name"><span class="white-text name">Carmen</span></a>
	      <a href="#email"><span class="white-text email">carmen@gmail.com</span></a>
	    </div></li>
	    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
	    <li><a href="#!">Second Link</a></li>
	    <li><div class="divider"></div></li>
	    <li><a class="subheader">Subheader</a></li>
	    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	</ul>
</div>

<div class="row" style="margin-top: 5%">
	<div class="input-field col s10 offset-s1">
	    <select>
	      <option value="" disabled selected>Selecciona el catálogo</option>
	      <option value="1">Catálogo 55</option>
	      <option value="2">Catálogo 58</option>
	      <option value="3">Catálogo 60</option>
	    </select>
	    <label>Selecciona el catálogo</label>
	</div>
</div>

<div class="contenedor">
	<div class="left_arrow"><a href="#"><i class="large material-icons">chevron_left</i></a></div>
	<div class="catalogo"><img width="100%" src="images/catalogo.png" alt="catalogo..."></div>
	<div class="right_arrow"><a href="#"><i class="large material-icons">chevron_right</i></a></div>
</div>

<div class="container">
	<div class="row">	
		<div class="input-field col s7">
	        <input id="codpro" type="text" class="validate">
	        <label for="codpro">Código producto</label>
	    </div>
		<div class="input-field col s4 offset-s1">
			<div class="number-container">
				<!-- <label for="">Cantidad</label> -->
				<input class="browser-default" type="number" name="" id="__cantidad" min="1" max="15" disabled>
			</div>
		</div>

	</div>
</div>

<div class="container center">
	<a class="waves-effect waves-light btn-large shop red lighten-1" ><i class="material-icons right">shopping_cart</i>Agregar al carrito</a>
</div>

</body>
</html>

<script>
	$(document).ready(function(){
    	$('.sidenav').sidenav();
    	$('select').formSelect();
    	$('input[type="number"]').niceNumber({
			autoSize: true,
			autoSizeBuffer: 1,
			buttonDecrement: "-",
			buttonIncrement: "+",
			buttonPosition: 'around'
		});
  	});

</script>