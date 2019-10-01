<?php

class Carro{
	public $color;
	public $marca;
	public $modelo;
	public $cantLlantas;
	public $cilindraje;
	public $velocidad = 0;

	public function presentarse(){
		$saludo = "Hola soy un carro de marca ".$this->marca;
		$saludo = $saludo . " de color " . $this->color;
		$saludo = $saludo . " modelo " . $this->modelo;
		$saludo = $saludo . " de un cilindraje " .$this->cilindraje;
		$saludo = $saludo . " y con " . $this->cantLlantas . " llantas";
		return $saludo;
	}

	public function aumentarVel($cant){
		//$this->velocidad = $this->velocidad + $cant;
		$this->velocidad += $cant;
	}

	public function mostrarVelocidad(){
		echo "Vamos a ". $this->velocidad . " Km/h";
	}

}


$car = new Carro();
$car->color = "Rojo";
$car->marca = "Ferrary";
$car->modelo = 2020;
$car->cantLlantas = 4;
$car->cilindraje = 5400;



//echo $car->presentarse();
$car->aumentarVel(10);
$car->aumentarVel(20);
$car->mostrarVelocidad();
echo '<br>';
$car->aumentarVel(100);
$car->mostrarVelocidad();
