<?php
  session_start();
  session_destroy();

  echo "Se destruyo la sessión de usuario";
?>