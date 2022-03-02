<?php
fscanf(STDIN, '%d%d', $x, $y);
 
for ($i = 0; $i <= 100; $i++) {
  for ($j = 0; $j <= $x-$i; $j++) {
    if (($x == $i + $j) && (2*$i)+(4*$j) == $y) {
      echo 'Yes';
      exit;
    }
  }
}
echo 'No';
