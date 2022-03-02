<?php
$c = 0;
fscanf(STDIN, '%d%d', $h, $w);
$a = [];
$min = 100;
for ($i = 0; $i < $h; $i++) {
  $a[] = explode(' ', trim(fgets(STDIN)));
  $min = min(array_merge($a[$i], [$min]));
}
 
for ($i = 0; $i < count($a); $i++) {
  for ($j = 0; $j < count($a[$i]); $j++) {
    $c += ($a[$i][$j] - $min);
  }
}
echo $c;
