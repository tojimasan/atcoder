<?php
$c = 0;
fscanf(STDIN, '%d', $n);
for ($i = 0; $i < $n; $i++) {
  $s[] = explode(' ', trim(fgets(STDIN)));
}
 
for ($i = 0; $i < count($s); $i++) {
  for ($j = $i+1; $j < count($s); $j++) {
    $x = ($s[$j][1] - $s[$i][1]) / ($s[$j][0] - $s[$i][0]);
    if (abs($x) <= 1) $c++;
  }
}
 
echo $c;
