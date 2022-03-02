<?php
fscanf(STDIN,'%d%d',$n,$m);
$A = explode(' ', trim(fgets(STDIN)));
$popular_line = array_sum($A) / (4*$m);
echo ($m <= count(array_filter($A, function($a) use ($popular_line) {
  return $a >= $popular_line;
}))) ? 'Yes' : 'No';
