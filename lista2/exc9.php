<?php
    $linha = readline();
    $valores = explode(' ',$linha);
    $a = intval($valores[0]);
    $b = intval($valores[1]);

    $c = $a % $b;

    if($c == 0){
        echo "Sao Multiplos\n";
    }
    else{
        echo "Nao sao Multiplos\n";
    }
?>