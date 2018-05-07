<!DOCTYPE html>
<html>
	<head>

		<title>DDSI</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/index.css">

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
							<li><a href="#"> Documentación</a></li>
							<li><a href="nosotros.php"> Sobre Nosotros</a></li>
						</ul>
					<div>
			</div>

			<div class="body">
				<h2> Documentación de la web: </h2>
				<section class="documentacion">
          <h3>Breve descripción:</h3>
          <p>
            Comenzamos explicando las tecnologías utilizadas para desarrollar la web.
            Editor: Atom, editor de texto y entorno de programación free source.
            BBDD: La base de datos utilizada es la aportada por la UGR. Después
            de muchos intentos, conseguimos un conector que cambiando las consultas
            de mysql por las de oci para SQL developer nos proporciona la abstracción
            necesaria para poder conectarnos a la UGR.
            XAMP: para alojar localmente mediante apache nuestra web y poder comunicarnos
            con la base de datos por SQL developer.

				  </p>
				</section>
        <section class="documentacion">
          <h3>Lenguajes utilizados:</h3>
          <p>
            Los lenguajes utilizados para implemtación de la página web son:
              <p>+HTML: para el esqueleto de la página web.</p>
              <p>+CSS : para la edición de esta.</p>
              <p>+PHP : para conexión a la base de datos y obtención de datos.Por
                     supuesto refresca la página de forma dinámica.</p>
              <p>+PL/SQL: para la realización de los triggers dentro de la Base de datos.</p>
          </p>
        </section>
        <section class="documentacion">
          <h3>Funcionalidad:</h3>
          <p>
            La página web consta de varios apartados en los que encontramos una
            breve descripción de la página, una consulta a todas las tablas de la
            web, la documentación de la web y una opinión propia de los compañeros
            de trabajo.

            Las tablas se actualizan de forma dinámica desde la Base de datos,
            mediante SQL developer controlaremos las modificaciones de datos.

            Internamente contamos con un archivo que se encarga de la conexión
            hacia la base de datos y de hacerle las peticiones de datos, además
            de mostrarlos en el apartado "Vista de Tablas".(Ver codigo si es necesario).

          </p>
        </section>
			</div>


<!-------------------------------------------------------------------->
		</div>
	</body>
</html>
