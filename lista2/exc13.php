<?php
    $sal = doubleval(readline());
    $porcentagem = 0;
    if($sal>=0 && $sal <= 400){
        $porcentagem = 15;
    }
    elseif($sal>400 && $sal<=800){
        $porcentagem = 12;
    }
    elseif($sal>800 && $sal<=1200){
        $porcentagem = 10;
    }
    elseif($sal>1200 && $sal<=2000){
        $porcentagem = 7;
    }
    else{
        $porcentagem = 4;
    }
    $reajuste = $sal * ($porcentagem/100);
    $total = $sal + $reajuste;
    $reajuste = number_format($reajuste, 2, ".", "");
    $total = number_format($total, 2, ".", "");
    echo "Novo salario: $total\n";
    echo "Reajuste ganho: $reajuste\n";
    echo "Em percentual: $porcentagem %\n";

?>