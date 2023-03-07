<?php
    $a = readline();
    $b = readline();

    $distancia = $a * $b;
    $x = $distancia /12;
    $x = number_format($x, 3 , ".","");
    
    echo "$x\n";
?>