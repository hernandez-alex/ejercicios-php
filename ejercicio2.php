<?php
  // ----- 2. Método POST 00:14:30
  if($_POST){
    // Recibir información del formulario HTML (Método POST)
    $nombre = $_POST['txtNombre'];
    echo "Hola ".$nombre;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hola mundo!

  <form action="ejercicio2.php" method="post">
    Nombre
    <input type="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>