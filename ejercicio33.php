<?php
  $jsonContenido = '[
    {"nombre":"Alex", "apellido":"Hernández"},
    {"nombre":"Monica", "apellido":"Márquez"},
    {"nombre":"Rosa", "apellido":"Bracho"},
    {"nombre":"Patricia", "apellido":"Carolina"}
  ]';

  $resultado = json_decode($jsonContenido);

  print_r($resultado);

  echo "<br/><br/>";

  foreach ($resultado as $persona) {
    echo $persona->nombre." ".$persona->apellido."<br/>";
  }
?>