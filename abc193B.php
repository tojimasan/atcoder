<?php
$n = trim(fgets(STDIN));
$s = [];
$min = 10**9;
 
for ($i = 0; $i < $n; $i++) {
  fscanf(STDIN, '%d%d%d', $a, $b, $c);
  $s[] = [$a,$b, $c];
}
 
for ($i = 0; $i < $n; $i++) {
  if (($s[$i][2] - $s[$i][0]) > 0) {
    $min = $min > $s[$i][1] ? $s[$i][1] : $min;
  }
}
echo $min === 10**9 ? -1 : $min;
