<?php
    // inicializando
    $array1 = array(100, 200, 300);
    $array2 = [10, 20, 33];

    // obtendo um valor
    echo $array1[0];
    echo "<br>";
    echo $array2[0];

    echo "<br>";
    echo "<pre>";
    var_dump($array1);
    echo "</pre>";
    echo "<br>";
    
    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    // definindo array sem elementos
    $array3 = [];

    $array3[] = 100;
    $array3[] = 300;
    $array3[] = 500;
    $array3[] = 900;

    $ultima_posicao = sizeof($array3) - 1;
    echo "Elemento da última posição é o: " . $array3[$ultima_posicao];
    echo "<br>";
    echo "Elemento da última posição é o: " . $array3[sizeof($array3)-1];
    echo "<br>";
    echo "<pre>";
    print_r($array3);
    echo "</pre>";
?>