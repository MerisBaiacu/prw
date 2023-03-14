<?php
$linha = readline();
$valores = explode(' ',$linha);
$inc = intval($valores[0]);
$end = intval($valores[1]);

if($inc>$end){
    $total = (24 - $inc) + $end;
    echo "O JOGO DUROU $total HORA(S)\n";
}
elseif($inc<$end){
    $total = $end - $inc;
    echo "O JOGO DUROU $total HORA(S)\n";
}
else{
    echo "O JOGO DUROU 24 HORA(S)\n";
}

?>