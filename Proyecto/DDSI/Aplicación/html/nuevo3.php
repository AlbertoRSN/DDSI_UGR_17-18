<!DOCTYPE html>
<html lang="es">

<body>
    <?php

        include("model.php");


        $contenido= new model();


        $descripcion1 = $_POST['descr1'];
        $contenido->crearContenido3($descripcion1);
    ?>
    <p> contenido creado con éxito </p>
    <a type="button" href="../index.php">Aceptar</a>
</body>
