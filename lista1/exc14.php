<?php
    $X = readline();
    $Y = doubleval(readline());

    $Z = $X / $Y;
    $Z = number_format($Z,3, ".","");

    echo "$Z  km/l\n";
?>