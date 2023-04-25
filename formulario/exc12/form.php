<?php
$p = $_GET['p'];
$i = $_GET['i'];

while($i >=1){
    echo"<img src='$p/$i.jpg' width=150 e height=100>";
    echo"<br>";
    $i--;
}
?>