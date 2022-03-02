<?php
fscanf(STDIN, '%d', $n);
$ss = [];
 
for ($i = 0; $i < $n; $i++) {
  $s = trim(fgets(STDIN));
  if (isset($ss[$s])) $ss[$s]++;
  else $ss[$s] = 1;
}
 
arsort($ss);
reset($ss);
echo key($ss);
