<?php

    include "algoritmo.php";

    $fichero = "submitInput.txt";

    $texto = fopen($fichero, 'r') or die("no se encuentra el fichero");
    
    $cases = fgets($texto);
    $inputs = []; // input de cada caso
    $sides = []; // primer elemento de cada caso
    $splitInputs = []; // matriz auxiliar para hacer explode
    
    if ($texto) {
        $i = 0;
        while (($line = fgets($texto)) !== false) {
            $inputs[$i] = $line;
            $splitInputs[$i] = explode(" ", $inputs[$i]);
            $sides[$i] = $splitInputs[$i][0];
            array_splice($splitInputs[$i], 0, 1);
            sort($splitInputs[$i], SORT_NUMERIC);
            
            algoritmo($i, $sides[$i], $splitInputs[$i]);
            
            $i++;
        }
    
        fclose($texto);
    } else {
        echo "no se puede abrir el fichero";
    }
?>