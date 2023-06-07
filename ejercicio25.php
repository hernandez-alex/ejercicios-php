<?php

  class persona {
    // Propiedades
    public $nombre;
    private $edad;
    protected $altura;

    // Métodos
    public function asignarNombre($nuevoNombre) {
      $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
      echo "Hola soy ".$this->nombre."<br/>";
    }

    public function mostrarEdad(){
      $this->edad = 20;
      return $this->edad;
    }
  }

  class trabajador extends persona {
    // Propiedades
    public $puesto;

    // Métodos
    public function presentarTrab(){
      echo "Hola soy ".$this->nombre." y soy un ".$this->puesto."<br/>";
    }
  }

  // Crear instancias de la clase trabajador
  $objTrabajador = new trabajador();
  
  $objTrabajador->asignarNombre("Orlando Mendoza");
  $objTrabajador->puesto = "Profesor";
  $objTrabajador->presentarTrab();

?>