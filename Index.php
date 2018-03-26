<!DOCTYPE html>
<html lang="en" ng-app="practica-ng-view">
<head>
	<!-- Librerias Bootstrap y jquery de google -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Libreria Angular -->
	<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>

	<!-- Librerias ngRouter de Angular -->
	<script src="https://code.angularjs.org/1.4.7/angular-route.min.js"></script>

	<!-- Nuestro codigo para el uso de Angular -->
	<script src= "controlador.js"></script>
	
	<meta charset="UTF-8">
	<title>Practica Angular - ng-view</title>
</head>
<body>
	<header></header>
	<br/>
	
	<div class="container" >
		<div class="row">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<header><span class="sr-only">Desplegar navegación</span></header>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Menú</a>
				</div>
 
				<div id="navbar-ex1-collapse" class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="#/Inicio">Inicio</a>
						</li>
						<li>
							<a href="#/Blog">Blog</a>
						</li>
						<li>
							<a href="#/Descargas">Descargas</a>
						</li>
						<li>
							<a href="#/Acerca">Acerca de</a>
						</li>
					</ul>
				</div>
			</nav>	
		</div>		
	</div>
	<br/>
	
	<div ng-view> </div>
</body>
</html>