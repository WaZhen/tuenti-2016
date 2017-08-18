<?php
    function tiempoSubidaNormal($inicio, $final) {
        $tiempo = 0;
        while($inicio < $final) {
            $tiempo += $inicio;
            $inicio++;
        }
        return $tiempo;
    }
    /*
    function comparaInicios(&$a, &$b) {
        if($a->getInicio() > $b->getInicio()) {
            return 1;
        } else 
        if($a->getInicio() < $b->getInicio()) {
            return -1;
        } else {
            return 0;
        }
    }*/
?>