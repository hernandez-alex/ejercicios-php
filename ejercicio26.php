<?php

class persona {
  // Propiedades
  public $nombre;
  private $edad = 20;
  protected $altura = 1.76;

  // Constructor
  function __construct($nuevoNombre){
    $this->nombre = $nuevoNombre;
  }

  // Métodos
  public function asignarNombre($nuevoNombre) {
    $this->nombre = $nuevoNombre;
  }
  public function imprimirNombre(){
    echo "Hola soy ".$this->nombre."<br/>";
  }
  public function mostrarEdad(){
    return $this->edad;
  }
}

// Crear instancias de la clase persona
$objAlumno = new persona("Monica Márquez");

// Ejecutando un método del objeto
$objAlumno->imprimirNombre("");

?>