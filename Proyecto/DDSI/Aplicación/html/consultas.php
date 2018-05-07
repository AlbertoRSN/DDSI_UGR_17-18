<?php


function mostrarTablas(){
$query = oci_parse($conexion,"SELECT * FROM RUTA");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODRUTA".$row[0];
  }

oci_free_statement($query);

$query = oci_parse($conexion,"SELECT * FROM ACEPTADO");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "asdfasCODALBARAN".$row[0];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM ALBARANGENERA");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODALBARAN".$row[0];
    echo "CODPAQUETE".$row[1];
    echo "PRECIO".$row[2];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM ENRUTA");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODPAQUETE".$row[0];
    echo "NRPRUTA".$row[1];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM MANEJA");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODRUTA".$row[0];
    echo "NRPRUTERO".$row[1];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM PAGADO");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODPALBARAN".$row[0];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM PAQUETE");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODPAQUETE".$row[0];
    echo "PESO".$row[1];
    echo "DIRENVIO".$row[2];
    echo "DIREMISOR".$row[3];
    echo "BULTOS".$row[4];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM PRODUCEFACTURA");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODFACTURA".$row[0];
    echo "CODALBARAN".$row[1];
    }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM RECHAZADO");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODALBARAN".$row[0];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM RUTA");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "CODRUTA".$row[0];
  }

oci_free_statement($query);


$query = oci_parse($conexion,"SELECT * FROM RUTERO");
oci_execute($query);

while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo "NRPRUTERO".$row[0];
    echo "DNI".$row[1];
    echo "NOMBRE".$row[2];
    echo "APELLIDO".$row[3];
  }

oci_free_statement($query);

}
?>
