<?php
    $p = $_GET['P'];
    $m = $_GET['M'];
    $g = $_GET['G'];

    $total = ($p * 10)+($m * 12)+($g * 15);
    echo "<h1>Total: R$$total,00</h1>";
?>
<a href='form.html'><button>Voltar</button></a>