<?php
fscanf(STDIN,'%d',$n);
$sum = 0;
 
for ($i = 1; $i <= $n; $i++) {
  if ($i % 3 != 0 && $i % 5 != 0) $sum += $i;
}
echo $sum;
