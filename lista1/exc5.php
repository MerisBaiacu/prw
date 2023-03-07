<?php
    $a = readline();
    $b = readline();

    $x = ($a * 3.5 + $b * 7.5)/11;

    $x = number_format($x, 5, ".", "" );

    echo "MEDIA = $x\n"
?>