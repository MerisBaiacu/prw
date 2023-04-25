<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['op'];

switch($op){
    case "SO";
    $x = $n1 + $n2;
    echo"<p>$x</p>";
    break;
    case "SU";
    $x = $n1 - $n2;
    echo"<p>$x</p>";
    break;
    case "DI";
    $x = $n1 / $n2;
    echo"<p>$x</p>";
    break;
    case "MU";
    $x = $n1 * $n2;
    echo"<p>$x</p>";
    break;
}
?>