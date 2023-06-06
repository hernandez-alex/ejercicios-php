<?php
  class persona {
    // Propiedades
    public $nombre;
    private $edad = 20;
    protected $altura = 1.76;

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
  $objAlumno = new persona();
  $objAlumno2 = new persona();

  // Ejecutando un método del objeto
  $objAlumno->asignarNombre("Patricia");
  $objAlumno2->asignarNombre("Monica");

  echo $objAlumno->nombre;
  echo "<br/>";
  echo $objAlumno2->nombre;
  
  echo "<br/>";

  $objAlumno->imprimirNombre();
  $objAlumno2->imprimirNombre();

  echo "<br/>";

  // echo $objAlumno->edad; // private
  // echo $objAlumno->altura; // protected

  echo $objAlumno->mostrarEdad();
?>