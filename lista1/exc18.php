<?php
    $x = readline();

    $c100 = $x/100;
    $c50  = ($x%100)/50;
    $c20 = (($x%100)%50)/20;
    $c10 = ((($x%100)%50)%20)/10;
    $c5 = (((($x%100)%50)%20)%10)/5;
    $c2 = ((((($x%100)%50)%20)%10)%5)/2;
    $c1 = ((((($x%100)%50)%20)%10)%5)%2;

    echo "$x\n";
    echo floor($c100), " nota(s) de R$ 100,00\n";
    echo floor($c50), " nota(s) de R$ 50,00\n";
    echo floor($c20), " nota(s) de R$ 20,00\n";
    echo floor($c10), " nota(s) de R$ 10,00\n";
    echo floor($c5), " nota(s) de R$ 5,00\n";
    echo floor($c2), " nota(s) de R$ 2,00\n";
    echo floor($c1), " nota(s) de R$ 1,00\n";
    ?>