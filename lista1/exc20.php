<?php
$idade = readline();

$anos = $idade/365;
$meses = ($idade%365)/30;
$dias = ($idade%365)%30;

echo floor($anos), " ano(s)\n";
echo floor($meses), " mes(es)\n";
echo floor($dias), " dia(s)\n";

?>