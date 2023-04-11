<?php
$vel = doubleval(readline());
$dis = doubleval(readline());
$com = doubleval(readline());

$h = $dis / $vel;
$c = $dis / $com;
$h = number_format($h,2,".","");
$c = number_format($c,2,".","");

echo "Total horas: $h\nTotal combustivel: $c\n";
?>