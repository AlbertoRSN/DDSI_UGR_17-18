<!DOCTYPE html>
<html>
	<head>

		<title>DDSI</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/index.css">
		<?php include 'connection.php';

		?>
	</head>
	<body>
		<div id="interno">
<!-------------------------------------------------------------------->

			<div class="header">
				<div id="headerUP">
					<h1 id=tittlePage> Bienvenido a nuestra Aplicación </h1>
				<div>
					<div id="headerDOWN">
						<ul>
							<li><a href="../index.php"> Inicio </a></li>
							<li><a href="vistaTablas.php"> Vista de Tablas</a></li>
							<li><a href="consultasBD.php"> Consultas BD</a></li>
							<li><a href="documentacion.php"> Documentación</a></li>
							<li><a href="nosotros.php"> Sobre Nosotros</a></li>
						</ul>
					<div>
			</div>

			<div class="body">
				<?php mostrarTablas();?>
			</div>


<!-------------------------------------------------------------------->
		</div>
	</body>
</html>
