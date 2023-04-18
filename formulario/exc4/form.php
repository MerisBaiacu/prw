<?php
    $x = $_GET['ano'];

    if($x%4 == 0 && $x%100 != 0 ){
        echo "<h1>$x é um ano bissesto</h1>";
    }else{
        echo "<h1>$x não é um ano bissesto</h1>";
    }
?>

<a href='form.html'><button>Voltar</button></a>