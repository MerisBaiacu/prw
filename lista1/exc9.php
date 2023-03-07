<?php
    $num = readline();
    $salario = readline();
    $vendas = readline();

    $porcentagem = $vendas * 0.15;
    $total = $porcentagem + $salario;
    $total = number_format($total, 2, ".","");
    
    echo "TOTAL = R$ $total\n";

?>