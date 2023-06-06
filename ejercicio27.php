<?php
  class unaClase{
    public static function unMetodo(){
      echo "Hola soy un método estático";
    }
  }

  // Creamos una instancia de la clase
  $obj = new unaClase();

  // Accedemos al método
  $obj->unMetodo();

  // Accediendo a un método estático sin instanciar
  unaClase::unMetodo();

?>