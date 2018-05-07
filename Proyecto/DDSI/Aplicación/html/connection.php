
<?php


function mostrarTablas(){
  $conexion = oci_connect("x5936176", "x5936176", "oracle0.ugr.es/practbd.oracle0.ugr.es");

  if (!$conexion) {
    $m = oci_error();
    echo $m['message'], "n";
    exit;
  }


$query = oci_parse($conexion,"SELECT * FROM RUTA");
oci_execute($query);

    echo "<div class=izq>
            <table>
              <tr><th>RUTA</th></tr>
        ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>Codigo Ruta:</b> ".$row[0]."</td></tr>";
  }
    echo "  </table>
        </div>";
oci_free_statement($query);



$query = oci_parse($conexion,"SELECT * FROM ACEPTADO");
oci_execute($query);

    echo "<div class=der>
            <table>
              <tr><th>ACEPTADO</th></tr>
        ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo  "<tr><td><b>Codigo Albarán:</b> ".$row[0]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);



$query = oci_parse($conexion,"SELECT * FROM ALBARANGENERA");
oci_execute($query);

      echo "<div class=izq>
              <table>
                <tr><th>ALBARANGENERA</th></tr>
            ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>Codigo Albarán:</b> ".$row[0]."</td></tr>";
    echo "<tr><td><b>Codigo Paquete:</b> ".$row[1]."</td></tr>";
    echo "<tr><td><b>Precio:</b> ".$row[2]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);




$query = oci_parse($conexion,"SELECT * FROM ENRUTA");
oci_execute($query);

      echo "<div class=der>
              <table>
                <tr><th>ENRUTA</th></tr>
          ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>Codigo Paquete:</b> ".$row[0]."</td></tr>";
    echo "<tr><td><b>NRP.Ruta:</b> ".$row[1]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);





$query = oci_parse($conexion,"SELECT * FROM MANEJA");
oci_execute($query);

      echo "<div class=izq>
              <table>
                <tr><th>MANEJA</th></tr>
              ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>CODRUTA:</b> ".$row[0]."</td></tr>";
    echo "<tr><td><b>NRPRUTERO:</b> ".$row[1]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM PAGADO");
oci_execute($query);

      echo "<div class=der>
              <table>
                <tr><th>PAGADO</th></tr>
                ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>CODPALBARAN:</b> ".$row[0]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM PAQUETE");
oci_execute($query);

      echo "<div class=izq>
              <table>
                <tr><th>PAQUETE</th></tr>
        ";

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>CODPAQUETE:</b> ".$row[0]."</td></tr>";
    echo "<tr><td><b>PESO:</b> ".$row[1]."</td></tr>";
    echo "<tr><td><b>DIRENVIO:</b> ".$row[2]."</td></tr>";
    echo "<tr><td><b>DIREMISOR:</b> ".$row[3]."</td></tr>";
    echo "<tr><td><b>BULTOS:</b> ".$row[4]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);



$query = oci_parse($conexion,"SELECT * FROM PRODUCEFACTURA");
oci_execute($query);

      echo "<div class=der>
              <table>
                <tr><th>PRODUCEFACTURA</th></tr>
          ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>CODFACTURA:</b> ".$row[0]."</td></tr>";
    echo "<tr><td><b>CODALBARAN:</b> ".$row[1]."</td></tr>";
    }
    echo "  </table>
        </div>";
oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM RECHAZADO");
oci_execute($query);

      echo "<div class=izq>
              <table>
                <tr><th>RECHAZADO</th></tr>
        ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>CODALBARAN:</b> ".$row[0]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM RUTA");
oci_execute($query);

      echo "<div class=der>
              <table>
                <tr><th>RUTA</th></tr>
        ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>CODRUTA:</b> ".$row[0]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM RUTERO");
oci_execute($query);
      echo "<div class=izq>
              <table>
                <tr><th>RUTERO</th></tr>
        ";
while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "<tr><td><b>NRPRUTERO:</b> ".$row[0]."</td></tr>";
    echo "<tr><td><b>DNI:</b> ".$row[1]."</td></tr>";
    echo "<tr><td><b>NOMBRE:</b> ".$row[2]."</td></tr>";
    echo "<tr><td><b>APELLIDO:</b> ".$row[3]."</td></tr>";
  }
  echo "  </table>
      </div>";
oci_free_statement($query);

}
?>
