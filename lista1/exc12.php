<?php
    //$linha = "3.0 4.0 10"; //readline();
    $linha = readline();
    $valores = explode(' ',$linha);
    $a = doubleval($valores[0]);
    $b = doubleval($valores[1]);
    $c = doubleval($valores[2]);

    $tri = ($a*$c)/2;
    $cir = ($c*$c) * 3.14159;
    $tra = (($a + $b)*$c)/2;
    $qua = $b * $b;
    $ret = $a * $b;

    $tri = number_format($tri, 3, ".", "");
    $cir = number_format($cir, 3, ".", "");
    $tra = number_format($tra, 3,".", "");
    $qua = number_format($qua, 3, ".", "");
    $ret = number_format($ret, 3, ".", "");;
    
    echo "TRIANGULO: $tri"."\n";
    echo "CIRCULO: $cir"."\n";
    echo "TRAPEZIO: $tra"."\n";
    echo "QUADRADO: $qua"."\n";
    echo "RETANGULO: $ret"."\n";
?>