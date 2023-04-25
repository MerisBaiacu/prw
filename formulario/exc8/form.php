<?php
$x = $_GET['numero'];
$y = 0;

while($y<=10){
$z = $x * $y;
echo"<p>$x × $y = $z</p>";
$y++;
}
?>
<a href='form.html'><button>Voltar</button></a>