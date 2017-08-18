<?php

    class Piso{
        private $atajos; // array de atajos que parten del piso
        private $mejorTiempoActual = INF; // empieza siendo infinito para que el primer calculo realizado se convierta en candidato inmediatamente
        private $piso; // variable que almacena el valor del piso
        public $arrayPisos;
        
        function __construct($piso, &$arrayPisos) {
            $this->piso = $piso;
            $this->mejorTiempoActual = tiempoSubidaNormal(1, $this->piso);
            $this->atajos = [new Atajo($piso, ($piso+1), $piso)]; // crea el atajo subir normal
            
        }
        function __destruct(){
            //echo "piso Destruido<br>";
        }
        
        // getters
        function getMejorTiempoActual() {
            return $this->mejorTiempoActual;
        }
        function getPiso() {
            return $this->piso;
        }
        
        
        // setters
        function setMejorTiempoActual($valor) {
            $this->mejorTiempoActual = $valor;
        }
        
        // Metodos
        function puntua(&$arrayPisos, $nuevaPuntuacion, $atajoTomado) {
            if($nuevaPuntuacion <= $this->mejorTiempoActual) {
                $this->mejorTiempoActual = $nuevaPuntuacion;
                for($pisoAComprobar = $this->piso; $pisoAComprobar > 0; $pisoAComprobar--) { // baja pisos y mira si es rentable
                    if($nuevaPuntuacion <= $arrayPisos[$pisoAComprobar - 1]->getMejorTiempoActual() ) { // O es el propio piso, o vale la pena bajar
                        $arrayPisos[$pisoAComprobar - 1]->setMejorTiempoActual($nuevaPuntuacion);
                        if($this->piso <= (count($arrayPisos) - 1) ) { // si no es el ultimo piso...
                            $arrayPisos[$pisoAComprobar - 1]->tomaAtajo($arrayPisos); // prueba a subir desde aqui y desde todos los pisos de abajo que para llegara a ellos se baje desde aqui
                        } else {
                        }
                    }
                } unset($pisoAComprobar);
            } else {
                $atajoTomado->setRentable(false); // esta linea es la que va optimizando los calculos, de primeras todos los atajos los consideramos rentables
            }
        }
        ////////////////////////////////////////
        
        function tomaAtajo(&$arrayPisos){
            for($atajo = 0; $atajo < count($this->atajos); $atajo++) { // para cada $atajo del $piso

                if($this->atajos[$atajo]->getRentable()) { // esta es la linea que optimiza el calculo, comprueba solo los caminos que no hayan sido descartados aun
                    $nuevaPuntuacion = $this->mejorTiempoActual + $this->atajos[$atajo]->getTiempo();
                    $arrayPisos[$this->atajos[$atajo]->getFinal() - 1]->puntua($arrayPisos, $nuevaPuntuacion, $this->atajos[$atajo]);
                }
            } // fin del for $piso.atajos.length
            unset($atajo, $nuevaPuntuacion);
        }
        
        function pushAtajo($agregar) {
            array_push($this->atajos, $agregar);
        }
        
    } // fin de clase

?>