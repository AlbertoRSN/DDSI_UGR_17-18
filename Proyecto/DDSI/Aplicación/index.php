<!DOCTYPE html>
<html>
	<head>

		<title>DDSI</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/index.css">
		<?php include 'html/connection.php';

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
							<li><a href="#"> Inicio </a></li>
							<li><a href="/html/vistaTablas.php"> Vista de Tablas</a></li>
							<li><a href="/html/consultasBD.php"> Consultas BD</a></li>
							<li><a href="/html/documentacion.php"> Documentación</a></li>
							<li><a href="/html/nosotros.php"> Sobre Nosotros</a></li>
						</ul>
					<div>
			</div>

			<div class="body">
				<h2> Instrucciones: </h2>
				<p>Nuestra aplicación web cuenta con X botones, los cuales nos redigirán
					 hacia las diferentes secciones implementadas en nuestra Base de Datos.
				</p>
				<section>
					<h3> Vista de Tablas </h3>
					<p>En esta sección mostraremos el contenido de nuestras tablas
						 mediante consultas internas a la base de datos. (El código de estas
						 consultas estará disponible para el profesor siempre que lo desee)
					</p>
				</section>

				<section>
					<h3> Documentación </h3>
					<p>Mostraremos utilizando Ajax la documentación de nuestra aplicación
						(El código de estas consultas estará disponible para el profesor
						siempre que lo desee)
					</p>
				</section>
				<section>
					<h3> Nosotros </h3>
					<p>Breve opinón sobre nuestro trabajo.
						 (El código de estas consultas estará disponible para el profesor
						 siempre que lo desee)
					</p>
				</section>
			</div>


<!-------------------------------------------------------------------->
		</div>
	</body>
</html>
