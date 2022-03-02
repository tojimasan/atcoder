<?php
fscanf(STDIN, '%d', $n);
$s = explode(' ', trim(fgets(STDIN)));
$areas = array_fill(1, 1000, false);
 
for ($a = 1; $a < 1000; $a++) {
  for ($b = 1; $b < 1000; $b++) {
    $area = 4*$a*$b+3*$a+3*$b;
    if ($area > 1000) continue;
    $areas[$area] = true;
  }
}
 
$c = 0;
for($i=0;$i<$n;$i++){
    if(!$areas[$s[$i]]) $c++;
}
echo $c;
