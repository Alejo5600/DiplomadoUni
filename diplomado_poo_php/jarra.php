<?php 

class Jarra{
	//Atributo que contiene el nivel maximo de la jarra
	public $nivelMax = 0;
	//Atributo que contiene el nivel minimo de la jarra
	public $nivelMin = 0;
	//Atributo que contiene el nivel actual de la jarra
	public $nivelActual = 0;

	/**
	*	Metodo para definir el nivel maximo de la jarra
	**/
	public function definirNivelMax($cant){
		$this->nivelMax = $cant;		
	}
	/**
	*	Metodo para llenar con "x" cantidad la jarra
	**/
	public function llenarCon($cant){
		$suma = $this->nivelActual + $cant;
		if($suma > $this->nivelMax){
			echo "Error no se puede llenar mas";
		}else{
			$this->nivelActual = $suma;
		}

	}
	/**
	*	Método para completar el nivel maximo de la jarra
	**/
	public function completarJarra(){
		$this->nivelActual = $this->nivelMax;
	}
	/**
	*	Metodo para servir "x" cantidad de tazas
	**/
	public function servirTazas($cant_tazas){
		$cant = $cant_tazas * 20;
		$resta = $this->nivelActual - $cant;
		if($this->nivelMin > $resta){
			echo "Error, no se pueden llenar todas las tazas";
		}else{
			$this->nivelActual = $resta;
		}
	}
}