<?php
header('Content-Type: text/html; charset=utf-8');

echo "<p id='cr'>"."Лице и периметър на кръг:"."</p>";
$r = 3;
$s = 3.14*$r*$r;
$p = 2*3.14*$r;
echo "<p>"."The area of circle is = ".$s." "."sm2"."</p>";
echo "<p>"."The perimeter of circle is = ".$p." "."sm3"."</p>";