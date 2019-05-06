<?php
	//Trabajar con POO
	//Clase
	//Una clase es un modelo que se utiliza para crear objetos que comparten un mismo
	//comportaminento, estado o identidad
	class Automovil{
		//propiedades
		//Son las caracteristicas que puede tener un objeto
		public $marca;
		public $modelo;

		//METODOS:
		//es el algoritmo asociado a un obeto que indica la capacidad de 
		//lo que este puede hacer. La unoca diferencia entre metodo y funcion. es que 
		//llamamos METODO A LAS FUNCIONES DE UNA CLASE (en poo), mientras que llamamos funciones
		// a los algoritmos de la programacion estructurada

		public function mostrar(){
			echo "hola soy un $this->marca, modelo $this->modelo";
		}
	}


	//objetos
	//Una entidad provista de metodos o mensajes a los cuales responde con valores concretos
	$a=new Automovil();
	$a-> marca="Toyota";
	$a-> modelo="Corello";
	$a-> mostrar();

	$b=new Automovil();
	$b-> marca="Nissan";
	$b-> modelo="Tsuru";
	$b-> mostrar();

	//Principios de la POO que se cumplen en este ejemplo:

	//1. ABTRACCION nuevos tipos de datos, el que se quiera se crea
	//2. ENCAPSULAMIENTO Orgniza el codigo en grupos
?>