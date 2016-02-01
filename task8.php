<?php 

date_default_timezone_set('Europe/Sofia');

$time1 = date('H:i');
echo '<p>'.'-'.' '.$time1.'</p>';

$time2 = date('H:i a'); 
echo '<p>'.'-'.' '.$time2.'</p>';

$time3 = date('H:i:s'); 
echo '<p>'.'-'.' '.$time3.'</p>';

