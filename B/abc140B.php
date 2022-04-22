<?php
fscanf(STDIN, '%d', $n);
$a = explode(' ', trim(fgets(STDIN)));
$b = explode(' ', trim(fgets(STDIN)));
$c = explode(' ', trim(fgets(STDIN)));
$ans = array_sum($b);

for ($i = 0; $i < $n-1; $i++) {
  if ($a[$i] + 1 == $a[$i+1]) {
    $ans += $c[$a[$i]-1];
  }
}

echo $ans;
