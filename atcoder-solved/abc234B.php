<?php
fscanf(STDIN, '%d', $n);
$xy = [];
$max = 0;
 
for ($i = 0; $i < $n; $i++) {
  $xy[] = explode(' ', trim(fgets(STDIN)));
}
 
for ($i = 0; $i < $n-1; $i++) {
  for ($j = $i+1; $j < $n; $j++) {
    // 線分の距離を求める
    $len = sqrt(pow($xy[$i][0]-$xy[$j][0], 2) + pow($xy[$i][1]-$xy[$j][1], 2));
    if ($len > $max) $max = $len;
  }
}
echo $max;
