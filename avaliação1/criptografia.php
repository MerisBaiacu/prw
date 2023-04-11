<?php
$rep= intval(readline());

while ($rep > 0){
    $str = readline();
    $vet = explode(' ', $str);
    $reversed = array_reverse($vet);
    $str2 = implode(" ", $reversed);
    $b =  array("B","V","D","L","Z","S",);
    $a = array("P","F","T","R","J","X",);
    $cripto = str_replace($a, $b, $str2);
    echo "$cripto\n";
    $rep --;
}
?>