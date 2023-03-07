<?php
    $a = readline();
    $b = readline();
    $c = readline();

    $x = $a * 0.2 + $b * 0.3 + $c * 0.5;

    $x = number_format($x, 1, ".", "");

    echo "MEDIA = $x\n"
?>