<?php
date_default_timezone_set('Europe/Sofia');

$today1 = date("d/M/Y");
echo '<p>'.'-'.' '.$today1.'</P>'; 

$today2 = date("d/m/y");
echo '-'.' '.$today2;  

$today3 = date("Y-m-d");
echo '<p>'.'-'.' '.$today3.'</p>';  