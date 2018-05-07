<?php
class model{


    function getContenidos(){
        $consulta=$this->db->query("SELECT contenido.* FROM contenido;");
        while($filas=$consulta->fetch_assoc()){
            $this->contenidos[]=$filas;
        }
        return $this->contenidos;
    }

    function crearContenido($Desc){
      $conexion = oci_connect("x5936176", "x5936176", "oracle0.ugr.es/practbd.oracle0.ugr.es");

      if (!$conexion) {
        $m = oci_error();
        echo $m['message'], "n";
        exit;
      }
        $result= oci_parse($conexion,'BEGIN PROCEDURE1(:desc); END;');
        oci_bind_by_name($result, ':desc', $Desc);
        oci_execute($result);
      }

      function crearContenido2($Desc){
        $conexion = oci_connect("x5936176", "x5936176", "oracle0.ugr.es/practbd.oracle0.ugr.es");

        if (!$conexion) {
          $m = oci_error();
          echo $m['message'], "n";
          exit;
        }
          $result= oci_parse($conexion,'BEGIN PROCEDURE2(:desc); END;');
          oci_bind_by_name($result, ':desc', $Desc);
          oci_execute($result);
        }

        function crearContenido3($Desc){
          $conexion = oci_connect("x5936176", "x5936176", "oracle0.ugr.es/practbd.oracle0.ugr.es");

          if (!$conexion) {
            $m = oci_error();
            echo $m['message'], "n";
            exit;
          }
            $result= oci_parse($conexion,'BEGIN PROCEDURE3(:desc); END;');
            oci_bind_by_name($result, ':desc', $Desc);
            oci_execute($result);
          }

}

?>
