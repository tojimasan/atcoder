<?php
fscanf(STDIN,'%d',$n);
$a = explode(' ', trim(fgets(STDIN)));
$s = [$a[0]];
 
for ($i = 1; $i < $n; $i++) {
  $cur = $a[$i] + $a[$i-1];
  $a[$i] = $cur > 360 ? $cur - 360 : $cur;
}
$a[] = 0;
$a[] = 360;
sort($a);
$h = [];
for ($i = 0; $i < count($a)-1; $i++) {
  $h[] = abs($a[$i] - $a[$i+1]);
}
rsort($h);
echo $h[0];
