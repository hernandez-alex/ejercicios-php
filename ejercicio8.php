<?php
  if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    // Suma - Resta - Multiplicación - División
    $suma = $valorA + $valorB;
    echo $valorA." + ".$valorB." = ".$suma."<br/>";
    $resta = $valorA - $valorB;
    echo $valorA." - ".$valorB." = ".$resta."<br/>";
    $multiplicacion = $valorA * $valorB;
    echo $valorA." * ".$valorB." = ".$multiplicacion."<br/>";
    $division = $valorA / $valorB;
    echo $valorA." / ".$valorB." = ".$division;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores aritméticos</title>
</head>
<body>
  <form action="ejercicio8.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
  </form>
</body>
</html>