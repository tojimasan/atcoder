<?php
fscanf(STDIN, '%d%d', $n, $x);
$sum = 0;
for ($i = 0; $i < $n; $i++) {
  fscanf(STDIN, '%d%d', $v, $p);
  $cur = $v * $p;
  $sum += $cur;
  if ($sum > $x*100) {
    echo $i+1;
    exit;
  }
}
 
echo -1;
