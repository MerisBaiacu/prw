<?php
$t = $_GET['h'];
$n = $_GET['nome'];

if($t < 12){
    echo"<p>Bom Dia $n!</p>";
}
elseif($t < 18){
    echo"<p>Boa Tarde $n!</p>";
}
else{
    echo"<p>Boa Noite $n!</p>";
}
?>