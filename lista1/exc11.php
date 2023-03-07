<?php
    $raio = doubleval(readline());
    
    $volume = (4/3) * 3.14159 * ($raio * $raio * $raio);
    $volume = number_format($volume, 3, ".", "");

    echo "VOLUME = $volume\n"
?>