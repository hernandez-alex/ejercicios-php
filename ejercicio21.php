<?php
  $frutas = array("Fresa", "Pera", "Manzana");

  print_r($frutas);
  
  echo "<br/>";
  
  echo $frutas[1];

  echo "<br/>";

  for($i = 0; $i<=2; $i++){
    echo $frutas[$i]."<br/>";
  }
?>