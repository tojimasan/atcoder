<?php
$ans = 'No';
trim(fscanf(STDIN, '%d%d%d', $n, $s, $d));
for ($i = 0; $i < $n; $i++) {
  trim(fscanf(STDIN, '%d%d', $x, $y));
  if ($s > $x && $d < $y) {
    $ans = 'Yes';
    break;
  }
}
 
echo $ans;
