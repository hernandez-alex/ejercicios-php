<?php
  session_start();

  $_SESSION["usuario"] = "develoteca";
  $_SESSION["estatus"] = "logueado";

  echo "Sesión iniciada".":<br/>";

  echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
?>