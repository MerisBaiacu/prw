<?php

    $linha = readline();
    $linha2 = readline();
    $valores = explode(' ',$linha);
    $valores2 = explode(' ',$linha2);
    $a = intval($valores[0]);
    $b = intval($valores[1]);
    $c = doubleval($valores[2]);
    $d = intval($valores2[0]);
    $e = intval($valores2[1]);
    $f = doubleval($valores2[2]);

    $valor = ($b * $c) + ($e * $f);
    $valor = number_format($valor, 2,"."," ");

    echo "VALOR A PAGAR: R$ $valor\n";
?>