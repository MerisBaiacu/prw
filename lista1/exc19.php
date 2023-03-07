<?php
    $x = readline();

    $h = ($x/60)/60;
    $m = ($x/60)%60;
    $s = $x%60;

    echo floor($h), ":";
    echo floor($m), ":";
    echo floor($s), "\n";

?>