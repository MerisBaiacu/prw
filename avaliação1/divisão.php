<?php
$rep = intval(readline());
$str = readline();
$NM = explode(' ',$str);
$n = $NM[0];
$m = $NM[1];

while ($rep > 0){

$str2 = readline();
$XY = explode(' ',$str2);
$x = $XY[0];
$y = $XY[1];

if($x>$n && $y>$m){
    echo "NE\n";

}
elseif($x<$n && $y>$m){
    echo "NO\n";

}
elseif($x>$n && $y<$m){
    echo "SE\n";

}
elseif($x>$n && $y<$m){
    echo "SO\n";

}
else{
    echo "divisa\n";

}
$rep--;
}
?>