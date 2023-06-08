<?php
  $nombreArchivo = "archivo.txt";
  
  $contenidoArchivo = "Hola, saludos desde PHP!";

  $archivoACrear = fopen($nombreArchivo, "w");

  fwrite($archivoACrear, $contenidoArchivo);

  fclose($archivoACrear);
?>