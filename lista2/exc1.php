<?php
    $linha = readline();
    $valores = explode(' ',$linha);
    $a = intval($valores[0]);
    $b = intval($valores[1]);
    $c = intval($valores[2]);
    $d = intval($valores[3]);

    if($b>$c && $d>$a && $c+$d>$a+$b && $a%2 == 0 && $c>0 && $d>0){
        echo "Valores aceitos\n";
    }
    else{
        echo "Valores nao aceitos\n";
    }
?>