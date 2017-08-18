<?php
    
    class Atajo {
        private $inicio;
        private $final;
        private $tiempo;
        private $rentable; // true si el atajo vale la pena
        
        
        // Constructor
        function __construct($Inicio, $Final, $Tiempo) {

            $this->inicio = $Inicio;
            $this->final = $Final;
            $this->tiempo = $Tiempo;
            $this->rentable = true;
            
        }
        
        function __destruct() {
            //echo "atajo destruido<br>";
        }



        // getters
        function getInicio() {
            return $this->inicio;
        }
       
        function getFinal() {
            return $this->final;
        }
        function getTiempo() {
            return $this->tiempo;
        }
        function getrentable() {
            return $this->rentable;
        }
        
        
        
        // setters
         function setInicio($valor) {
            $this->inicio = $valor;
        }
        function setFinal($valor) {
            $this->final = $valor;
        }
        function setTiempo($valor) {
            $this->tiempo = $valor;
        }
        function setRentable($valor) {
            $this->rentable = $valor;
        }
        
        
        
    } // fin de clase


?>