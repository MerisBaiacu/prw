<?php
    $linha = readline();
    $numeros = explode(' ',$linha);
    $a = intval($numeros[0]);
    $b = intval($numeros[1]);
    $c = intval($numeros[2]);

    $maiorab = ($a + $b + abs($a-$b))/2;
    $maiorcx = ($maiorab + $c + abs($maiorab - $c))/2;

    echo "$maiorcx eh o maior\n";

    ?>