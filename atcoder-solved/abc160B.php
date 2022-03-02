<?php
fscanf(STDIN,'%d',$x);
 
$count_500 = intdiv($x, 500);
$count_5 = intdiv($x - $count_500 * 500, 5);
echo $count_500 * 1000 + $count_5 * 5;
