<?php
fscanf(STDIN, '%d', $n);
$d = explode(' ', trim(fgets(STDIN)));
$sum = 0;

for ($i = 0; $i < $n-1; $i++) {
  for ($j = $i+1; $j < $n; $j++) {
    $sum += ($d[$i] * $d[$j]);
  }
}

echo $sum;
