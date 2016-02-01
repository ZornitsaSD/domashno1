<?php
header('Content-Type: text/html; charset=utf-8');

echo "<p id='trz'>"."Лице и периметър на трапец:"."</p>";
$a = 3;
$b = 6;
$c = 4;
$d = 5;
$h = 3.5;
$s = (($a + $b)*$h)/2;
$p = $a + $b + $c + $d;
echo "<p>"."The area of trapeze is = ".$s." "."sm2"."</p>";
echo "<p>"."The perimeter of trapeze is = ".$p." "."sm3"."</p>";
?>