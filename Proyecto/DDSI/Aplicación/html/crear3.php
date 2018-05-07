<!DOCTYPE html>
<html>
	<head>

		<title>DDSI</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/index.css">
		<?php include 'connection.php';
          include("model.php");
          $elemento = new model();
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
              <ul>
                <li><a href="crear.php"> Aceptar Albarán</a></li>
                <li><a href="crear2.php"> Rechazar Albarán</a></li>
                <li><a href="crear3.php"> Pagar Albarán</a></li>
              </ul>
            </ul>
          </div>
        </div>
      </div>
    </div>

      <div class="body">
        <form class="form-inline" method="post" action="nuevo3.php">
          <h1>Introduce el código del albarán pagado:</h1>
          <textarea rows="10"  name="descr1">Introduce el código del albarán pagado</textarea>
          <p>
            <button type="submit" class="btn btn-primary">Aplicar</button>
          </p>
        </form>
    </div>
  </div>
</body>
</html>
