<?php
  $servidor="localhost";
  $nombredb="simpleZone";
  $usuario="root";
  $pass="";

  $conexion=new mysqli($servidor,$usuario,$pass,$nombredb);
  if($conexion-> connect_error ){
    die("No se pudo conectar ");
  }
?>