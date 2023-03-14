<?php
$linha = readline();
$valores = explode(' ', $linha);
$a = doubleval($valores[0]);
$b = doubleval($valores[1]);
$c = doubleval($valores[2]);

if($a<$b+$c && $b<$c+$a && $c<$a+$b){
    $per = $a + $b + $c;
    $per = number_format($per, 1, ".","");
    echo "Perimetro = $per\n";
}
else{
    $ar = (($a + $b)*$c)/2;
    $ar = number_format($ar, 1, ".","");
    echo "Area = $ar\n";
}
?>