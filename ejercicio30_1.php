<?php
    session_start();
  
    echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
?>