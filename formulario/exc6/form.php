<?php
$nome = $_GET['nome'];
$n1 = $_GET['nota1'];
$n2 = $_GET['nota2'];
$f = $_GET['freq'];

$media = ($n1 + $n2)/2;

if($media >= 5 && $f >= 75){
    echo"<h1 style='color: green'>Aprovado</h1>";
}
elseif($media < 5 && $f >= 75){
    echo"<h1 style='color: red'>Reprova por nota</h1>";
}
elseif($media >= 5 && $f < 75){
    echo"<h1 style='color: red'>Reprova por frequência</h1>";
}
else{
    echo"<h1 style='color: red'>Reprova por nota</h1>";
    echo"<h1 style='color: red'>Reprova por frequência</h1>";
}

?>
<a href='form.html'><button>Voltar</button></a>