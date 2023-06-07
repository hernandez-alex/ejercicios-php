<?php
  $frutas = array("f" => "fresa", "m" => "manzana", "p" => "pera");

  print_r($frutas);
  
  echo "<br/>";
  
  echo $frutas["p"];

  echo "<br/>";

  foreach ($frutas as $key => $value) {
    //echo $frutas[$key]."<br/>";
    echo $value."<br/>";
  }
?>