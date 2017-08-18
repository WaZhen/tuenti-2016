<?php
    include 'atajo.php';
    include 'piso.php';
    include 'algoritmo.php';
    include 'functions.php';

    $file = 'testInput.txt';
    $inputData = fopen($file, 'r') or die('no se encuentra el fichero');
    $cases = fgets($inputData);
    
    // resolucion de los casos
    for($i = 0; $i < $cases; $i++) {
      $pisosYAtajos = explode(' ', fgets($inputData));
      $pisos = $pisosYAtajos[0];
      $datosPisos = [];
      for($iPiso = 0; $iPiso < $pisos; $iPiso ++) {
        $datosPisos[$iPiso] = new Piso($iPiso + 1, $datosPisos);
      } unset($iPiso);
      $nAtajos = $pisosYAtajos[1];
      unset($pisosYAtajos);
      $atajo = [];
      for($j = 0; $j < $nAtajos; $j++) {
        $arrayLectura = fgets($inputData);
        $arrayLectura = explode(' ', $arrayLectura);
        $atajo[$j] = new Atajo($arrayLectura[0], $arrayLectura[1], $arrayLectura[2]);
        $datosPisos[($arrayLectura[0]-1)]->pushAtajo($atajo[$j]);
      } unset($j, $nAtajos);
      $resultadoFinal = INF;
      if($pisos > 1) {
        do{
          $resultadoFinal = $datosPisos[count($datosPisos)-1]->getMejorTiempoActual();
          $datosPisos[0]->tomaAtajo($datosPisos);
        } while ($resultadoFinal > $datosPisos[count($datosPisos)-1]->getMejorTiempoActual());
      } else {
        $resultadoFinal = 0;
      }
      echo 'Case #'.($i+1).': '.$resultadoFinal.'<br>';
      unset($pisos, $datosPisos);

      
      
    } // fin de iteracion de cada caso
    unset($i);
?>
