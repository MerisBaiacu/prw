<?php
    $linha1 = readline();
    $linha2 = readline();
    $p1 = explode(' ',$linha1);
    $p2 = explode(' ',$linha2);
    $x1 = doubleval($p1[0]);
    $y1 = doubleval($p1[1]);
    $x2 = doubleval($p2[0]);
    $y2 = doubleval($p2[1]);

    $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    $distancia = number_format($distancia, 4, ".","");
    
    echo "$distancia\n"

?>