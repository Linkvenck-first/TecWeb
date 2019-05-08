<?php
	//definir clase main
    class persona{
        public $edad;
        public $altura;
        public $peso;
        
        //obtener valores con getteres
        public function getEdad(){
            return $this->edad;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function getAltura(){
        	return $this->altura;    
        }

        //calculos

        public function setEdad($value){
            return $this->edad=$value;
        }

        public function setPeso($value){
            return $this->peso=$value;
        }

        public function setAltura($value){
        	return $this->altura=$value;    
        }

        //calcular el IMC accediendo a las propiedades

        public function imc(){
        	return $this-> peso/($this->altura * $this->altura);
        }

        public function imc2(){
        	return $this-> getPeso()/($this->getAltura() * $this->getAltura());
        }

    }

?>
