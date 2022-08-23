<?php

use Mpdf\Tag\P;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definiciones de las clases

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function imprimir(){}
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct()
    {
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto =0.0;
        
    }

    public function imprimir(){
        echo "DNI:" . $this->dni . "<br>";
        echo "Nombre:" . $this->nombre . "<br>";
        echo "Edad:" . $this->edad . "<br>";
        echo "Nacionalidad:" . $this->nacionalidad . "<br>";
        echo "Nota Portfolio:" . $this->notaPortfolio . "<br>";
        echo "Nota PHP:" . $this->notaPhp . "<br>";
        echo "Nota Proyecto:" . $this->notaProyecto . "<br>";
        echo "Promedio:" . number_format($this->calcularPromedio(), 2, ",",".") . "<br><br>";
    }
    public function calcularPromedio(){
        $promedio = 0;
        $promedio = ($this->notaPhp + $this->notaPortfolio + $this->notaProyecto)/3;
        return $promedio;
    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){}
    
}

//Programa

$alumno1 = new Alumno();
$alumno1->dni ="38987828";
$alumno1->nombre ="Gaston Escudero";
$alumno1->notaPhp = 9;
$alumno1->notaPortfolio =8;
$alumno1->notaProyecto= 8;
$alumno1-> imprimir();

$alumno2 = new Alumno();
$alumno2->dni ="37455670";
$alumno2->nombre ="Favio Alvarez";
$alumno2->notaPhp = 7;
$alumno2->notaPortfolio =10;
$alumno2->notaProyecto= 8;
$alumno2-> imprimir();



?>