<?php
fscanf(STDIN, '%d', $n);
$m = 0;
$y = 0;
$c = 0;
$x = explode(' ', trim(fgets(STDIN)));
 
for ($i = 0; $i < $n; $i++) {
  $a = abs($x[$i]);
  // マンハッタン距離
  $m += $a;
  // ユークリッド距離
  $y += pow($a, 2);
  // チェビシェフ距離
  $c = $c < $a ? $a : $c;
}
$y = sqrt($y);
 
echo $m . "\n";
echo $y . "\n";
echo $c . "\n";
