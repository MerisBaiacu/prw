<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $d = $idade * 365;

    echo "<h1>$nome tem $d dias</h1>";
?>
<a href='form.html'><button>Voltar</button></a>