<?php
    function algoritmo($caso, $candidatos, $lados) {
        $possible = false;
        $resultado = $lados[$candidatos - 1] * 3;
        for($i = 0; $i < ($candidatos-2); $i++) {
            for ($j = ($i+1); $j < ($candidatos-1); $j++) {
                if($lados[$j] > $resultado) {
                    break;
                }
                for($k = ($j+1); $k < $candidatos; $k++) {
                    if($lados[$i] + $lados[$j] > $lados[$k]){
                        if($resultado > $lados[$i] + $lados[$j] + $lados[$k]){
                            $resultado = $lados[$i] + $lados[$j] + $lados[$k];
                            $possible = true;
                            break 2;
                        }
                    }
                }
            }
        }
        if($possible){
            echo "Case #".($caso+1).": ".$resultado."<br>";
        } else {
            echo "Case #".($caso+1).": IMPOSSIBLE<br>";
        }
    }
?>