<?php
fscanf(STDIN, '%d', $n);
$c = 0;
for ($i = 0; $i < $n; $i++) {
  fscanf(STDIN, '%d%d', $a, $b);
  $c += ($b - $a + 1) * ($a + $b) / 2;
}
echo $c;
