<?php

    function algoritmo ($caso, $pisos, $cantidadAtajos, $arrayAtajos) {
        $resultado = 0;

        if($cantidadAtajos == 0) { // si no existen atajos
            $resultado += tiempoSubidaNormal(1, $pisos);
        } else {

            // sube normal hasta el primer atajo
            $resultado += tiempoSubidaNormal(1, $arrayAtajos[0]->getInicio());

            // 

        }

        echo "Caso #".$caso.": " . $resultado . "<br>";
    }

?>